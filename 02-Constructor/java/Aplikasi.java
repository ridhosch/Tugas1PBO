// Kelas Main untuk menjalankan program
public class Aplikasi {
    public static void main(String[] args) {
        // // Menggunakan constructor tanpa parameter
        // Mahasiswa mhs1 = new Mahasiswa();
        // mhs1.tampilkanInfo();

        // System.out.println();

        // // Menggunakan constructor dengan 2 parameter
        // Mahasiswa mhs2 = new Mahasiswa("Budi", "12345678");
        // mhs2.setUmur(20); // Mengatur umur menggunakan setter
        // mhs2.tampilkanInfo();

        // System.out.println();

        // // Menggunakan constructor dengan 3 parameter
        // Mahasiswa mhs3 = new Mahasiswa("Siti", "87654321", 22);
        // mhs3.tampilkanInfo();

        Mahasiswa ido = new Mahasiswa();
        ido.tampilkanInfo();

        // memberikan value ido ke property nama dari objek ido
        ido.setNama("Ridho Sachlan");
        System.out.println("Nama : " + ido.getNama());

        ido.setNim("4525210066");
        System.out.println("NIM : " + ido.getNim());

        ido.setUmur(15);
        System.out.println("Umur : " + ido.getUmur());

        // Constructor lengkap
        Mahasiswa nenden = new Mahasiswa("Nenden Nuraini", "4523210144", 17);
        nenden.tampilkanInfo();
    }
}