<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container xl-auto mx-12 px-48 mt-24 font-sans">
        <h1 class="text-lg ">Jadwal Departemen</h1>
        <h1 class="text-2xl font-bold">G6 - Ilmu Komputer</h1>
    
        <form action="#" class="mt-6">
            <p>
                <select class="pr-96 pl-2 py-1 shadow border text-right">
                    <!-- <i class="fa fa-search"></i> -->
                    <option>G1 - Statistika </option>
                    <option>G2 - Geofisika dan Meteorologi Terapan</option>
                    <option>G3 - Biologi</option>
                </select>
                <button class=" py-1 ml-2">
                    <i class="fa fa-filter "></i>
                </button>
            </p>
        </form>
    
        <form action="" class="mt-6">
            <p class="text-lg">View Category
                <select name="kategori" id="kategori" class="border pr-16 pl-2 ml-2 py-1 shadow">
                    <option value="seluruhnya">seluruhnya</option>
                </select>

    
            </p>
        </form>
    
        <form action="" class="mt-8">
            <h1 class="text-lg uppercase font-bold">senin</h1>

            <div class="flex flex-col">
                <div class="-my-2  sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-50 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-50">
                        <thead class="bg-gray-50">
                          <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase font-bold tracking-wider">
                              Jam
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase font-bold tracking-wider">
                              Kode MK
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase font-bold tracking-wider">
                              Nama MK
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase font-bold tracking-wider">
                              Ruangan
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase font-bold tracking-wider">
                                Semester
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase font-bold tracking-wider">
                                Kuota (Ma/Mi/In/Sc)
                            </th>
                          </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                10.00-12.00
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              KOM102
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              Computational Thinking (R1)
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                              CCR 1.09
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                2
                              </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                90/0/0/0
                            </td>
                          </tr>
                          <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                13.00-14.40
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              BIO100
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              Biologi Umum (K1)
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                              CCR 1.01
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                2
                              </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">
                                90/0/0/0
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

        </form>
    </div>

    

</body>

<script src="script.js"></script>
</html>