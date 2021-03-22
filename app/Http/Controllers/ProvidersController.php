<?php

namespace App\Http\Controllers;

use App\Models\Providers;
use Inertia\Inertia;
use Inertia\Response;

class ProvidersController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return Response
     */
    public function create(): Response
    {
        return Inertia::render('Dashboard',
            ['providers' => Providers::all()]
        );
    }
}
