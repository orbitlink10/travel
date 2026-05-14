<?php

namespace App\Services;

use App\Models\Agency;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Itinerary;
use App\Models\Proposal;
use App\Models\Product;
use App\Models\User;

class DashboardService
{
    public function getOverview(User $user): array
    {
        $agencyId = $user->agency_id;
        $isSuperAdmin = $user->isSuperAdmin();

        $clients = Client::query();
        $itineraries = Itinerary::query();
        $proposals = Proposal::query();
        $invoices = Invoice::query();
        $products = Product::query();

        if (!$isSuperAdmin && $agencyId) {
            $clients->where('agency_id', $agencyId);
            $itineraries->where('agency_id', $agencyId);
            $proposals->where('agency_id', $agencyId);
            $invoices->where('agency_id', $agencyId);
            $products->where('agency_id', $agencyId);
        }

        return [
            'agency' => $agencyId ? Agency::find($agencyId)?->name : null,
            'clients_count' => $clients->count(),
            'itineraries_count' => $itineraries->count(),
            'active_itineraries_count' => $itineraries->where('status', '!=', 'archived')->count(),
            'draft_itineraries_count' => $itineraries->where('status', 'draft')->count(),
            'proposals_count' => $proposals->count(),
            'total_invoice_value' => $invoices->sum('total'),
            'outstanding_balance' => $invoices->whereIn('status', ['issued', 'partial', 'overdue'])->sum('balance_due'),
            'products_count' => $products->count(),
        ];
    }
}
