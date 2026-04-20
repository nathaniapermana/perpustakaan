public function up()
{
    Schema::create('peminjamans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained();
        $table->foreignId('alat_id')->constrained();
        $table->date('tanggal_pinjam');
        $table->date('tanggal_kembali')->nullable();
        $table->integer('denda')->default(0);
        $table->string('status')->default('dipinjam'); // dipinjam / kembali
        $table->timestamps();
    });
}