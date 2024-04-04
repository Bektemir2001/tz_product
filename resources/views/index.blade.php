<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        ul.breadcrumb li+li::before {
            content: "\276F";
            padding-left: 8px;
            padding-right: 4px;
            color: inherit;
        }

        ul.breadcrumb li span {
            opacity: 60%;
        }

        #sidebar {
            -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
            transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        }

        #sidebar.show {
            transform: translateX(0);
        }

        #sidebar ul li a.active {
            background: #1f2937;
            background-color: #1f2937;
        }
    </style>

</head>
<body>

<div class="flex h-screen bg-gray-100">

    <!-- sidebar -->
    <div class="hidden md:flex flex-col w-64 bg-gray-800">
        <div class="flex flex-col flex-1 overflow-y-auto">
            <div class="bg-white p-4 w-20 rounded-br-lg">
                @include('includes.icon')
            </div>
            <nav class="flex-1 px-2 py-4 bg-gray-800">
                <a href="#" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                    Продукты
                </a>
            </nav>
        </div>
    </div>

    <!-- Main content -->
    <div class="flex flex-col flex-1 overflow-y-auto relative">
        <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
            <div class="flex items-center px-4">
                <a class="text-red-500 inline-block">Продукты</a>
            </div>
            <div class="flex items-center pr-4">
                <p class="text-base">Bektemir</p>
            </div>
        </div>
        <div class="absolute top-16 left-4" style="width: 80px; height: 3px;">
            <hr class="bg-red-500 border-none h-1">
        </div>
        <div class="flex">

            <!-- Правая часть с таблицей -->
            <div class="w-2/3 p-4">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="border rounded-lg shadow overflow-hidden">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-200">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">АРТИКУЛ</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">НАЗВАНИЕ</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">СТАТУС</th>
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">АТРИБУТЫ</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-10">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">John Brown</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1 Lake Park</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <button type="button" class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Левая часть с кнопкой -->
            <div class="w-1/3 p-4 flex justify-end">
                <div class="relative">
                    <button class="inline-flex items-center h-10 px-9 text-xs text-white transition-colors duration-150 bg-[#1da1f2]/90 rounded-lg focus:shadow-outline hover:bg-blue-[#1da1f2]/90" style="text-align: center; border-radius: 10px; width: 132px;" data-modal-toggle="default-modal">
                        <span>Добавить</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('includes.create_modal')
</div>
</body>
</html>
