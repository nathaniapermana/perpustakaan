public function up()
{
    Schema::create('peminjamans', function (Blueprint $table) {
        $table->id();
        $table->string('status')->default('dipinjam');
        $table->timestamps();
    });
}
