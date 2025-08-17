<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Pesan Validasi Bahasa Indonesia (Lengkap)
    |--------------------------------------------------------------------------
    |
    | Terjemahan untuk seluruh aturan validasi Laravel yang umum digunakan.
    | Placeholder: :attribute, :other, :value, :date, :min, :max, :size, dst.
    |
    */

    'accepted'             => ':Attribute harus diterima.',
    'accepted_if'          => ':Attribute harus diterima ketika :other bernilai :value.',
    'active_url'           => ':Attribute bukan URL yang valid.',
    'after'                => ':Attribute harus berisi tanggal setelah :date.',
    'after_or_equal'       => ':Attribute harus berisi tanggal setelah atau sama dengan :date.',
    'alpha'                => ':Attribute hanya boleh berisi huruf.',
    'alpha_dash'           => ':Attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num'            => ':Attribute hanya boleh berisi huruf dan angka.',
    'array'                => ':Attribute harus berupa array.',
    'ascii'                => ':Attribute hanya boleh berisi karakter alfanumerik ASCII satu byte.',
    'before'               => ':Attribute harus berisi tanggal sebelum :date.',
    'before_or_equal'      => ':Attribute harus berisi tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'array'   => ':Attribute harus memiliki item antara :min sampai :max.',
        'file'    => ':Attribute harus berukuran antara :min sampai :max kilobyte.',
        'numeric' => ':Attribute harus bernilai antara :min sampai :max.',
        'string'  => ':Attribute harus berjumlah antara :min sampai :max karakter.',
    ],
    'boolean'              => ':Attribute harus bernilai true atau false.',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'contains'             => ':Attribute harus berisi nilai yang diperlukan.', // untuk rule "contains"
    'current_password'     => 'Kata sandi saat ini tidak tepat.',
    'date'                 => ':Attribute bukan tanggal yang valid.',
    'date_equals'          => ':Attribute harus berupa tanggal yang sama dengan :date.',
    'date_format'          => ':Attribute tidak sesuai dengan format :format.',
    'decimal'              => ':Attribute harus memiliki :decimal angka di belakang koma.',
    'declined'             => ':Attribute harus ditolak.',
    'declined_if'          => ':Attribute harus ditolak ketika :other bernilai :value.',
    'different'            => ':Attribute dan :other harus berbeda.',
    'digits'               => ':Attribute harus berisi :digits digit.',
    'digits_between'       => ':Attribute harus berisi digit antara :min sampai :max.',
    'dimensions'           => 'Dimensi gambar pada :attribute tidak valid.',
    'distinct'             => ':Attribute memiliki nilai duplikat.',
    'doesnt_end_with'      => ':Attribute tidak boleh diakhiri dengan salah satu dari: :values.',
    'doesnt_start_with'    => ':Attribute tidak boleh diawali dengan salah satu dari: :values.',
    'email'                => ':Attribute harus berupa alamat email yang valid.',
    'ends_with'            => ':Attribute harus diakhiri dengan salah satu dari: :values.',
    'enum'                 => ':Attribute yang dipilih tidak valid.',
    'exists'               => ':Attribute yang dipilih tidak valid.',
    'extensions'           => ':Attribute harus memiliki ekstensi: :values.',
    'file'                 => ':Attribute harus berupa berkas.',
    'filled'               => ':Attribute wajib diisi.',
    'gt'                   => [
        'array'   => ':Attribute harus memiliki lebih dari :value item.',
        'file'    => ':Attribute harus lebih besar dari :value kilobyte.',
        'numeric' => ':Attribute harus lebih besar dari :value.',
        'string'  => ':Attribute harus lebih panjang dari :value karakter.',
    ],
    'gte'                  => [
        'array'   => ':Attribute harus memiliki :value item atau lebih.',
        'file'    => ':Attribute harus lebih besar atau sama dengan :value kilobyte.',
        'numeric' => ':Attribute harus lebih besar atau sama dengan :value.',
        'string'  => ':Attribute harus lebih panjang atau sama dengan :value karakter.',
    ],
    'hex_color'            => ':Attribute harus berupa warna heksadesimal yang valid.',
    'image'                => ':Attribute harus berupa gambar.',
    'in'                   => ':Attribute yang dipilih tidak valid.',
    'in_array'             => ':Attribute tidak terdapat dalam :other.',
    'integer'              => ':Attribute harus berupa bilangan bulat.',
    'ip'                   => ':Attribute harus berupa alamat IP yang valid.',
    'ipv4'                 => ':Attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'                 => ':Attribute harus berupa alamat IPv6 yang valid.',
    'json'                 => ':Attribute harus berupa JSON yang valid.',
    'lowercase'            => ':Attribute harus berhuruf kecil (lowercase).',
    'lt'                   => [
        'array'   => ':Attribute harus memiliki kurang dari :value item.',
        'file'    => ':Attribute harus kurang dari :value kilobyte.',
        'numeric' => ':Attribute harus kurang dari :value.',
        'string'  => ':Attribute harus kurang dari :value karakter.',
    ],
    'lte'                  => [
        'array'   => ':Attribute tidak boleh memiliki lebih dari :value item.',
        'file'    => ':Attribute harus kurang dari atau sama dengan :value kilobyte.',
        'numeric' => ':Attribute harus kurang dari atau sama dengan :value.',
        'string'  => ':Attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address'          => ':Attribute harus berupa alamat MAC yang valid.',
    'max'                  => [
        'array'   => ':Attribute tidak boleh memiliki lebih dari :max item.',
        'file'    => ':Attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => ':Attribute tidak boleh lebih besar dari :max.',
        'string'  => ':Attribute tidak boleh lebih dari :max karakter.',
    ],
    'max_digits'           => ':Attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes'                => ':Attribute harus berupa berkas berjenis: :values.',
    'mimetypes'            => ':Attribute harus berupa berkas dengan tipe MIME: :values.',
    'min'                  => [
        'array'   => ':Attribute harus memiliki sedikitnya :min item.',
        'file'    => ':Attribute harus minimal :min kilobyte.',
        'numeric' => ':Attribute harus minimal :min.',
        'string'  => ':Attribute harus minimal :min karakter.',
    ],
    'min_digits'           => ':Attribute harus memiliki setidaknya :min digit.',
    'missing'              => ':Attribute harus tidak ada.',
    'missing_if'           => ':Attribute harus tidak ada ketika :other bernilai :value.',
    'missing_unless'       => ':Attribute harus tidak ada kecuali :other bernilai :value.',
    'missing_with'         => ':Attribute harus tidak ada ketika terdapat :values.',
    'missing_with_all'     => ':Attribute harus tidak ada ketika terdapat :values.',
    'multiple_of'          => ':Attribute harus kelipatan dari :value.',
    'not_in'               => ':Attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format :attribute tidak valid.',
    'numeric'              => ':Attribute harus berupa angka.',
    'password'             => [
        'letters'       => ':Attribute harus mengandung setidaknya satu huruf.',
        'mixed'         => ':Attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers'       => ':Attribute harus mengandung setidaknya satu angka.',
        'symbols'       => ':Attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':Attribute ditemukan dalam kebocoran data. Harap pilih kata sandi lain.',
    ],
    'present'              => ':Attribute harus ada.',
    'present_if'           => ':Attribute harus ada ketika :other bernilai :value.',
    'present_unless'       => ':Attribute harus ada kecuali :other bernilai :value.',
    'present_with'         => ':Attribute harus ada ketika terdapat :values.',
    'present_with_all'     => ':Attribute harus ada ketika terdapat :values.',
    'prohibited'           => ':Attribute dilarang diisi.',
    'prohibited_if'        => ':Attribute dilarang diisi ketika :other bernilai :value.',
    'prohibited_unless'    => ':Attribute dilarang diisi kecuali :other ada pada :values.',
    'prohibits'            => ':Attribute melarang :other untuk ada.',
    'regex'                => 'Format :attribute tidak valid.',
    'required'             => ':Attribute wajib diisi.',
    'required_array_keys'  => ':Attribute harus memiliki entri untuk: :values.',
    'required_if'          => ':Attribute wajib diisi ketika :other bernilai :value.',
    'required_if_accepted' => ':Attribute wajib diisi ketika :other diterima.',
    'required_unless'      => ':Attribute wajib diisi kecuali :other bernilai :values.',
    'required_with'        => ':Attribute wajib diisi ketika terdapat :values.',
    'required_with_all'    => ':Attribute wajib diisi ketika terdapat :values.',
    'required_without'     => ':Attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => ':Attribute wajib diisi ketika tidak ada satupun dari :values yang ada.',
    'same'                 => ':Attribute dan :other harus sama.',
    'size'                 => [
        'array'   => ':Attribute harus berisi :size item.',
        'file'    => ':Attribute harus berukuran :size kilobyte.',
        'numeric' => ':Attribute harus bernilai :size.',
        'string'  => ':Attribute harus berjumlah :size karakter.',
    ],
    'starts_with'          => ':Attribute harus diawali dengan salah satu dari: :values.',
    'string'               => ':Attribute harus berupa teks.',
    'timezone'             => ':Attribute harus berupa zona waktu yang valid.',
    'unique'               => ':Attribute sudah digunakan.',
    'uploaded'             => ':Attribute gagal diunggah.',
    'uppercase'            => ':Attribute harus berhuruf besar (uppercase).',
    'url'                  => ':Attribute harus berupa URL yang valid.',
    'ulid'                 => ':Attribute harus berupa ULID yang valid.',
    'uuid'                 => ':Attribute harus berupa UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Pesan Khusus untuk Validasi Array (kadang dipakai)
    |--------------------------------------------------------------------------
    */

    'distinct_ignore_case' => ':Attribute memiliki nilai duplikat (abaikan besar/kecil huruf).',

    /*
    |--------------------------------------------------------------------------
    | Pesan Validasi Kustom
    |--------------------------------------------------------------------------
    |
    | Format: 'attribute.rule' => 'pesan kustom',
    | Contoh: 'email.unique' => 'Alamat email sudah terdaftar.'
    |
    */

    'custom' => [
        // 'email' => [
        //     'unique' => 'Alamat email sudah terdaftar.',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Nama Atribut yang Lebih Ramah
    |--------------------------------------------------------------------------
    |
    | Mengubah ":attribute" menjadi istilah yang lebih natural untuk pengguna.
    |
    */

    'attributes' => [
        // Umum
        'name'                  => 'nama',
        'username'              => 'nama pengguna',
        'email'                 => 'alamat email',
        'password'              => 'kata sandi',
        'password_confirmation' => 'konfirmasi kata sandi',
        'current_password'      => 'kata sandi saat ini',
        'token'                 => 'token',
        'code'                  => 'kode',
        'title'                 => 'judul',
        'slug'                  => 'slug',
        'excerpt'               => 'ringkasan',
        'content'               => 'konten',
        'body'                  => 'isi',
        'description'           => 'deskripsi',
        'message'               => 'pesan',
        'terms'                 => 'syarat dan ketentuan',
        'privacy'               => 'kebijakan privasi',

        // Kontak & alamat
        'phone'                 => 'nomor telepon',
        'address'               => 'alamat',
        'city'                  => 'kota',
        'province'              => 'provinsi',
        'country'               => 'negara',
        'postal_code'           => 'kode pos',
        'zipcode'               => 'kode pos',

        // Waktu & tanggal
        'date'                  => 'tanggal',
        'time'                  => 'waktu',
        'start_date'            => 'tanggal mulai',
        'end_date'              => 'tanggal selesai',
        'published_at'          => 'tanggal publikasi',
        'birthday'              => 'tanggal lahir',

        // Numerik
        'age'                   => 'usia',
        'price'                 => 'harga',
        'amount'                => 'jumlah',
        'quantity'              => 'kuantitas',
        'total'                 => 'total',

        // Media & file
        'image'                 => 'gambar',
        'photo'                 => 'foto',
        'avatar'                => 'avatar',
        'file'                  => 'berkas',
        'files'                 => 'berkas',

        // Lainnya
        'role'                  => 'peran',
        'permission'            => 'izin',
        'gender'                => 'jenis kelamin',
        'website'               => 'situs web',
        'url'                   => 'tautan',
        'link'                  => 'tautan',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pesan Global Tambahan
    |--------------------------------------------------------------------------
    |
    | Berguna untuk API response wrapper (mis. ApiResponse::fromValidationException).
    |
    */

    'failed' => 'Validasi gagal.',

];
