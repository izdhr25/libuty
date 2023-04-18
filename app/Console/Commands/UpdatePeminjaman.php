<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Peminjaman;

class UpdatePeminjaman extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:peminjaman';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tanggal = date('Y-m-d');
        $peminjaman = new Peminjaman();
        $peminjaman->updatePinjamByTanggal($tanggal);
        $this->info('Update peminjaman berhasil dilakukan pada tanggal '.$tanggal);
    }

}
