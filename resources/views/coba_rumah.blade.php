<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuci Sepatu</title>
</head>
<body>
    <a href="/about">ABOUT</a>
    <h1>ini cuci sepatu</h1>
    <form action="{{ route('getSolution') }}" method="POST">
    @csrf
    <label for="shoe">Pilih Jenis Sepatu:</label>
    <select name="shoe_id" id="shoe">
        @foreach($shoes as $shoe)
            <option value="{{ $shoe->id }}">{{ $shoe->name }}</option>
        @endforeach
    </select>

    <label for="dirt">Pilih Jenis Kotoran:</label>
    <select name="dirt_type_id" id="dirt">
        @foreach($dirtTypes as $dirtType)
            <option value="{{ $dirtType->id }}">{{ $dirtType->name }}</option>
        @endforeach
    </select>

    <button type="submit">Dapatkan Solusi</button>
</form>

<script>
    public function getSolution(Request $request)
{
    $shoeId = $request->input('shoe_id');
    $dirtTypeId = $request->input('dirt_type_id');

    // Ambil semua aturan yang sesuai
    $rules = Rule::where('shoe_id', $shoeId)
                 ->where('dirt_type_id', $dirtTypeId)
                 ->get();

    // Jika ada aturan yang cocok, ambil solusinya
    if ($rules->isNotEmpty()) {
        $solutions = $rules->pluck('solution');
    } else {
        $solutions = ['Tidak ada solusi yang ditemukan untuk kombinasi ini.'];
    }

    return view('solution', compact('solutions'));
}
</script>
</body>
</html>
 -->
