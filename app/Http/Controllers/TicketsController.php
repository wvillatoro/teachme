<?php

namespace TeachMe\Http\Controllers;



class TicketsController extends Controller
{
    public function latest()
    {
        dd('latest');
    }

    public function popular()
    {
        dd('popular');
    }

    public function open()
    {
        dd('open');
    }

    public function closed()
    {
        dd('closed');
    }

    public function details($id)
    {
        dd('details: '.$id);
    }
}
