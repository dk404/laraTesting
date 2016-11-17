<?php

namespace App\Http\Controllers;

use App\ChartHelpers\BuildsCharts;
use Illuminate\Http\Request;
use App\Queries\GridQueries\GridQuery;
use App\Http\Requests;

class ApiController extends Controller
{

    // Begin Widget Api Data Grid Method

    public function widgetData(Request $request)
    {

        return GridQuery::sendData($request, 'WidgetQuery');

    }

    // End Widget Api Data Grid Method



    // Begin Gadget Api Data Grid Method

    public function gadgetData(Request $request)
    {

        return GridQuery::sendData($request, 'GadgetQuery');

    }

    // End Gadget Api Data Grid Method



    public function marketingImageData(Request $request)
    {

        return GridQuery::sendData($request, 'MarketingImageQuery');
    }


    public function userChartData(Request $request, BuildsCharts $chart)
    {

        return $chart->buildChart($request, ['users', 'widgets', 'gadgets']);

    }

}