const hitungTotal = (nama, ...nilai) => {
    //hitung nilai total array 
    const total = nilai.reduce((total, current) => total + current, 0);

    //operator spread untuk menggabungkan array nilai dengan array tambahan
    const gabungandArray = [...nilai, 3, 9];

    // tampilkan pesan ke konsol menggunakan literal templat
    console.log(`Total nilai untuk ${nama} adalah ${total}`);
    };

    hitungTotal('NANDA P', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);