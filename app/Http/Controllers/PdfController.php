<?php
namespace App\Admin\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Encore\Admin\Layout\Content; 
 
class PdfController extends Controller
{
    public function index($customer_id)
    {
        $customer = Customer::whereId($customer_id)->first();
        $date = new Carbon();
 
        $pdf=PDF::loadView('commendation',compact('customer','date'));
        return $pdf->download('表彰状.pdf'); //こちらがダウンロード用機能
    }
 
    public function view($customer_id)
    {
        $customer = Customer::whereId($customer_id)->first();
        $date = new Carbon();
 
        return view('commendation',compact('customer','date')); //こちらがブラウザ表示用機能
    }
}