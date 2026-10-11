
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Tambahkan kolom UUID sementara
        DB::statement('ALTER TABLE "user" ADD COLUMN "uuid_baru" UUID');

        // Buat UUID untuk setiap mahasiswa yang sudah ada
        DB::statement('UPDATE "user" SET "uuid_baru" = gen_random_uuid()');

        // Pastikan semua mahasiswa memiliki UUID
        DB::statement('ALTER TABLE "user" ALTER COLUMN "uuid_baru" SET NOT NULL');

        // Ganti primary key lama dengan UUID
        DB::statement('ALTER TABLE "user" DROP CONSTRAINT "user_pkey"');

        DB::statement('ALTER TABLE "user" DROP COLUMN "id"');

        DB::statement('ALTER TABLE "user" RENAME COLUMN "uuid_baru" TO "id"');

        DB::statement('ALTER TABLE "user" ADD PRIMARY KEY ("id")');
    }

    public function down(): void
    {
        throw new \RuntimeException(
            'Rollback otomatis tidak tersedia karena ID angka lama tidak dapat dipulihkan.'
        );
    }
};
