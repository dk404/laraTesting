<?php

namespace App\Queries\GridQueries;
use DB;
use App\Queries\GridQueries\Contracts\DataQuery;

class GadgetQuery implements DataQuery
{

    public function data($column, $direction)
    {

        $rows = DB::table('gadgets')
                ->select('gadgets.id as Id',
                         'gadgets.name as Name',
                         'widgets.name as Widget',
                         'widgets.id as WidgetId',
                         DB::raw('DATE_FORMAT(gadgets.created_at,
                                 "%m-%d-%Y") as Created'))
                ->leftJoin('widgets', 'widget_id', '=', 'widgets.id')
                ->orderBy($column, $direction)
                ->paginate(10);

            return $rows;

    }

    public function filteredData($column, $direction, $keyword)
    {

        $rows = DB::table('gadgets')
                ->select('gadgets.id as Id',
                         'gadgets.name as Name',
                         'widgets.name as Widget',
                         'widgets.id as WidgetId',
                         DB::raw('DATE_FORMAT(gadgets.created_at,
                                 "%m-%d-%Y") as Created'))
                ->leftJoin('widgets', 'widget_id', '=', 'widgets.id')
                ->where('gadgets.name', 'like', '%' . $keyword . '%')
                ->orWhere('widgets.name', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(10);

            return $rows;

    }

}