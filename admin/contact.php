<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Kontak</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <nav class="bg-[#00A19B] text-white shadow-md">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="text-lg font-semibold">
                <a href="#" class="hover:text-gray-200">Contact</a>
            </div>
            <div>
                <ul class="flex space-x-6">
                    <li><a href="#" class="hover:text-gray-200">Home</a></li>
                    <li><a href="#" class="hover:text-gray-200">Kontak</a></li>
                    <form action="logout.php" method="POST" style="display: inline;">
                        <button type="submit" class="hover:text-gray-200">Logout</button>
                    </form>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container mx-auto p-6 bg-gray-100 rounded-md mt-6">
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Nomor Telepon</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Tanggal</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Pesan</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-800">
                    <?php
                    include '../koneksi.php';
                    $sql = "SELECT * FROM contact";
                    $data = mysqli_query($conn, $sql);
                    $nomor = 1;
                    while ($row = mysqli_fetch_array($data)) {

                    ?>
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2"><?= $nomor++; ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $row['nama'] ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $row['no_telp'] ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $row['email'] ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $row['tanggal'] ?></td>
                            <td class="border border-gray-300 px-4 py-2"><?= $row['pesan'] ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <a href="del_contact.php?id=<?= $row['id'] ?>"
                                    class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 flex items-center justify-center"
                                    onclick="return confirm('Yakin ingin menghapus data ini?');">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="rgba(255,255,255,1)">
                                        <path d="M17 4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7V2H17V4ZM9 9V17H11V9H9ZM13 9V17H15V9H13Z"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php   } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>