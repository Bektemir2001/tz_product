<style>
    .custom-button {
        position: relative;
        background-color: rgba(15, 197, 255, 0); /* Полностью прозрачный фон */
        border: 0.5px solid #374050;
        color: #5FC6F1; /* Цвет текста, выберите подходящий */
        display: inline-block;
    }
    .custom-button::after {
        content: '';
        position: absolute;
        bottom: -1px; /* Располагаем линию ниже текста */
        left: 50%; /* Центрируем линию по горизонтали */
        transform: translateX(-50%); /* Корректируем положение линии, чтобы она была точно в центре */
        width: 150px; /* Ширина линии */
        height: 1px; /* Высота линии */
        border-bottom: 1px dashed #5FC6F1;
    }

    .text-container {
        display: flex;
        gap: 20px;
    }

    .text-style-1,
    .text-style-2 {
        font-family: Roboto;
        font-size: 12px;
        font-weight: 400;
        line-height: 11px;
        text-align: left;
        gap: 0px;
        opacity: 0px;
    }

    .text-style-1 {
        width: 51px;
        height: 11px;
        top: 97px;
        left: 12px;
        color: #ece2e2; /* Цвет текста первого элемента */
    }

    .text-style-2 {
        width: 127px;
        height: 11px;
        top: 97px;
        left: 91px;
        color: #FFFFFF; /* Цвет текста второго элемента */
    }

</style>
<button data-modal-toggle="show-modal" style="display: none;" id="openShowModal"></button>
<div class="max-w-2xl mx-auto">
    <!-- Main modal -->
    <div id="show-modal" data-modal-show="false" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="rounded-lg shadow relative" style="background-color: #374050;">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t" style="border-color: rgba(255,255,255,0.2);">
                    <h3 class="text-xl lg:text-2xl font-semibold text-white" id="titleShowId">

                    </h3>
                    <div>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-500 text-sm p-1.5 inline-flex">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" fill="black" fill-opacity="0.4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9701 9.02981L13.5 8.49991C14.0523 7.94762 14.0523 7.05219 13.5 6.49991C12.9477 5.94762 12.0523 5.94762 11.5 6.49991L10.9575 7.0424C11.4188 7.88305 12.1173 8.57587 12.9701 9.02981ZM9.50209 8.49783L6.8564 11.1435C6.43134 11.5686 6.21881 11.7811 6.07907 12.0422C5.93934 12.3033 5.88039 12.598 5.7625 13.1875L5.6471 13.7645C5.58058 14.0971 5.54732 14.2634 5.64193 14.358C5.73654 14.4526 5.90284 14.4193 6.23545 14.3528L6.23545 14.3528L6.81243 14.2374L6.81244 14.2374C7.40189 14.1195 7.69661 14.0606 7.95771 13.9209C8.2188 13.7811 8.43132 13.5686 8.85636 13.1436L8.85638 13.1435L8.8564 13.1435L11.5108 10.4891C10.71 9.96895 10.0267 9.29005 9.50209 8.49783Z" fill="#C4C4C4" fill-opacity="0.7"/>
                            </svg>

                        </button>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-500 text-sm p-1.5 inline-flex">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="20" height="20" fill="black" fill-opacity="0.4"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 5.00763C9.77873 5.00763 9.5718 5.02718 9.41331 5.05934C9.33405 5.07543 9.278 5.09245 9.24301 5.1063C9.23589 5.10912 9.23029 5.11155 9.22608 5.11351C9.03349 5.27853 8.75023 5.26 8.57857 5.06535C8.39916 4.8619 8.4096 4.54309 8.60189 4.35327C8.70024 4.25618 8.81839 4.19854 8.90927 4.16256C9.00837 4.12333 9.1191 4.09305 9.23389 4.06975C9.46349 4.02315 9.73209 4 10 4C10.2679 4 10.5365 4.02315 10.7661 4.06975C10.8809 4.09305 10.9916 4.12333 11.0907 4.16256C11.1816 4.19854 11.2998 4.25618 11.3981 4.35327C11.5904 4.54309 11.6008 4.8619 11.4214 5.06534C11.2498 5.26 10.9665 5.27853 10.7739 5.11351C10.7697 5.11155 10.7641 5.10912 10.757 5.1063C10.722 5.09245 10.6659 5.07543 10.5867 5.05934C10.4282 5.02718 10.2213 5.00763 10 5.00763ZM5.73422 7.37742C5.56669 7.35939 5.34431 7.35878 5 7.35878V6.35114C5.00773 6.35114 5.01544 6.35114 5.02312 6.35114C5.03846 6.35114 5.0537 6.35114 5.06883 6.35114H14.9312C14.9463 6.35114 14.9615 6.35114 14.9769 6.35114L15 6.35114V7.35878C14.6557 7.35878 14.4333 7.35939 14.2658 7.37742C14.1062 7.39459 14.05 7.42331 14.0212 7.44369C13.9692 7.48044 13.9245 7.52768 13.8898 7.58269C13.8705 7.61318 13.8434 7.67267 13.8271 7.8415C13.8101 8.01875 13.8095 8.25404 13.8095 8.61832L13.8095 12.5141C13.8095 12.9607 13.8096 13.3455 13.7704 13.6537C13.7284 13.984 13.6338 14.3005 13.3911 14.5573C13.1484 14.8141 12.8492 14.9142 12.537 14.9586C12.2458 15 11.882 15 11.4599 15H8.54009C8.11795 15 7.75423 15 7.46296 14.9586C7.15081 14.9142 6.85159 14.8141 6.6089 14.5573C6.3662 14.3005 6.27156 13.984 6.22959 13.6537C6.19043 13.3455 6.19045 12.9607 6.19048 12.5141L6.19048 8.61832C6.19048 8.25404 6.1899 8.01875 6.17286 7.8415C6.15663 7.67267 6.12948 7.61318 6.11022 7.58269C6.07548 7.52768 6.03084 7.48044 5.97884 7.44369C5.95002 7.42331 5.8938 7.39459 5.73422 7.37742ZM12.9485 7.35878H7.05147C7.08774 7.48305 7.10797 7.61075 7.12035 7.73952C7.14288 7.97388 7.14287 8.26096 7.14286 8.59386L7.14286 12.4809C7.14286 12.9702 7.14387 13.2864 7.17348 13.5194C7.20125 13.738 7.24608 13.8064 7.28233 13.8448C7.31858 13.8832 7.38332 13.9306 7.58986 13.96C7.8101 13.9913 8.10901 13.9924 8.57143 13.9924H11.4286C11.891 13.9924 12.1899 13.9913 12.4101 13.96C12.6167 13.9306 12.6814 13.8832 12.7177 13.8448C12.7539 13.8064 12.7988 13.738 12.8265 13.5194C12.8561 13.2864 12.8571 12.9702 12.8571 12.4809V8.59385C12.8571 8.26096 12.8571 7.97388 12.8797 7.73952C12.892 7.61075 12.9123 7.48305 12.9485 7.35878ZM8.88889 9.29007C9.15188 9.29007 9.36508 9.51564 9.36508 9.79389V11.5573C9.36508 11.8355 9.15188 12.0611 8.88889 12.0611C8.6259 12.0611 8.4127 11.8355 8.4127 11.5573V9.79389C8.4127 9.51564 8.6259 9.29007 8.88889 9.29007ZM11.1111 9.29007C11.3741 9.29007 11.5873 9.51564 11.5873 9.79389V11.5573C11.5873 11.8355 11.3741 12.0611 11.1111 12.0611C10.8481 12.0611 10.6349 11.8355 10.6349 11.5573V9.79389C10.6349 9.51564 10.8481 9.29007 11.1111 9.29007Z" fill="#C4C4C4" fill-opacity="0.7"/>
                            </svg>
                        </button>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex" data-modal-toggle="show-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>

                </div>

                <div class="p-6 space-y-6">
                    <div>
                        <div class="text-container">
                            <div class="text-style-1">
                                Артикул
                            </div>
                            <div class="text-style-2" id="articleShowId">

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-container">
                            <div class="text-style-1">
                                Название
                            </div>
                            <div class="text-style-2" id="nameShowId">

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-container">
                            <div class="text-style-1" >
                                Статус
                            </div>
                            <div class="text-style-2" id="statusShowId">

                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-container">
                            <div class="text-style-1">
                                Атрибуты
                            </div>
                            <div class="text-style-2" id="attributeShowId">

                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


{{--<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>--}}
<script>
    let current_product = null;
    function showData(product)
    {
        current_product = product;
        console.log(product);
        document.getElementById('titleShowId').innerText = product.name;
        document.getElementById('articleShowId').innerText = product.article;
        document.getElementById('nameShowId').innerText = product.name;
        document.getElementById('statusShowId').innerText = product.status;
        let attributes = '';
        let obj = product.data;
        for (var key in obj) {
            if (obj.hasOwnProperty(key)) {
                let value = obj[key];
                attributes += `${key}: ${value} <br>`;
            }
        }
        document.getElementById('attributeShowId').innerHTML = attributes;
        document.getElementById('openShowModal').click();

    }
</script>
