<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Queries\GridQueries\GridQuery;

class ApiController extends Controller
{

    // Begin Post Api Data Grid Method

    public function postData(Request $request)
    {

        return GridQuery::sendData($request, 'PostQuery');

    }

    // End Post Api Data Grid Method



    // Begin Dummy Api Data Grid Method

    public function dummyData(Request $request)
    {

        return GridQuery::sendData($request, 'DummyQuery');

    }

    // End Dummy Api Data Grid Method



    // Begin Gadget Api Data Grid Method

    public function gadgetData(Request $request)
    {

        return GridQuery::sendData($request, 'GadgetQuery');

    }

    // End Gadget Api Data Grid Method



    // Begin Subcategory Api Data Grid Method

    public function subcategoryData(Request $request)
    {

        return GridQuery::sendData($request, 'SubcategoryQuery');

    }

    // End Subcategory Api Data Grid Method



    // Begin Category Api Data Grid Method

    public function categoryData(Request $request)
    {

        return GridQuery::sendData($request, 'CategoryQuery');

    }




    // Begin Widget Api Data Grid Method

    public function widgetData(Request $request)
    {

        return GridQuery::sendData($request, 'WidgetQuery');

    }

    // End Widget Api Data Grid Method

}