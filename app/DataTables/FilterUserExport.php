<?php
namespace App\DataTables;
// use Illuminate\Support\Facades\View as View;
// use View;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
// use Maatwebsite\Excel\Concerns\WithEvents;

class FilterUserExport implements FromView, ShouldAutoSize
{
    private $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    /**
     * @return View
     */
    public function view(): View
    {
        return view('yajra.filtered-data', ['users' => $this->users]);
    }

    /**
     * @return array
     */
    // public function registerEvents(): array
    // {
    //     return [
    //         AfterSheet::class => function(AfterSheet $event) {
    //             $event->sheet->getDelegate()->setRightToLeft(true);
    //         },
    //     ];
    // }
}


?>
