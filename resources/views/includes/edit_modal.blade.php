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
</style>
<div class="max-w-2xl mx-auto">
    <!-- Main modal -->
    <div id="create-modal" data-modal-show="false" aria-hidden="true" class="hidden overflow-x-hidden overflow-y-auto fixed h-modal md:h-full top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center">
        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="rounded-lg shadow relative" style="background-color: #374050;">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t" style="border-color: rgba(255,255,255,0.2);">
                    <h3 class="text-xl lg:text-2xl font-semibold text-white">
                        Добавить продукт
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="default-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="flex flex-col">
                        <label for="article" class="text-white" style="font-size: 11px">Артикул</label>
                        <input type="text" id="article" name="article" class="rounded-lg bg-gray-200 mt-2 p-2">
                        <p class="text-red-600" style="font-size: 11px;" id="article_error"></p>
                    </div>
                    <div class="flex flex-col">
                        <label for="name" class="text-white" style="font-size: 11px">Название</label>
                        <input type="text" id="name" name="name" class="rounded-lg bg-gray-200 mt-2 p-2">
                        <p class="text-red-600" style="font-size: 11px;" id="name_error"></p>
                    </div>
                    <div class="flex flex-col">
                        <label for="status" class="text-white" style="font-size: 11px">Статус</label>
                        <select id="status" name="status" class="rounded-lg bg-gray-200 mt-2 p-2">
                            <option value="available">Доступен</option>
                            <option value="unavailable">Недоступен</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="name" class="text-white">Атрибуты</label>
                        <div id="AttributeAreaId">

                        </div>
                        <button class="custom-button" onclick="addAttribute()">
                            + Добавить атрибут
                        </button>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex space-x-2 items-center p-6 border-t rounded-b" style="border-color: rgba(255,255,255,0.2);">
                    <button class="inline-flex items-center h-10 px-9 text-xs text-white transition-colors duration-150 bg-[#1da1f2]/90 rounded-lg focus:shadow-outline hover:bg-blue-[#1da1f2]/90" style="text-align: center; border-radius: 10px; width: 132px;" onclick="sendData()">
                        <span>Добавить</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script>
    let attribute_id = 1;
    function addAttribute()
    {
        let attribute_area = document.getElementById('AttributeAreaId');
        let divElement = document.createElement('div');
        divElement.id = `AttributeElementId${attribute_id}`;
        divElement.className = "flex items-center space-x-4 mb-4 mt-4";
        let content = `
                                <div>
                                    <label for="input1" class="text-white" style="font-size: 11px">Название</label>
                                    <input type="text" id="attribute_name" name="attribute_name" class="rounded-lg bg-gray-200 mt-2 p-2">
                                </div>
                                <div>
                                    <label for="input2" class="text-white" style="font-size: 11px">Значение</label>
                                    <input type="text" id="attribute_item" name="attribute_item" class="rounded-lg bg-gray-200 mt-2 p-2">
                                </div>
                                <div class="align-middle inline-block mt-8">
                                    <svg width="24" height="24" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="deleteAttribute(${attribute_id})">
                                        <path d="M6.66663 10L6.66663 8" stroke="#C4C4C4" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M9.33337 10L9.33337 8" stroke="#C4C4C4" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M2 4.66675H14V4.66675C12.8954 4.66675 12 5.56218 12 6.66675V9.33342C12 11.219 12 12.1618 11.4142 12.7476C10.8284 13.3334 9.88562 13.3334 8 13.3334V13.3334C6.11438 13.3334 5.17157 13.3334 4.58579 12.7476C4 12.1618 4 11.219 4 9.33341V6.66675C4 5.56218 3.10457 4.66675 2 4.66675V4.66675Z" stroke="#C4C4C4" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M6.71214 2.24706C6.78811 2.17618 6.9555 2.11355 7.18836 2.06888C7.42122 2.02421 7.70653 2 8.00004 2C8.29355 2 8.57886 2.02421 8.81172 2.06888C9.04458 2.11355 9.21198 2.17618 9.28794 2.24706" stroke="#C4C4C4" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round"/>
                                    </svg>
                                </div>
        `;
        attribute_id += 1;
        divElement.innerHTML = content;
        attribute_area.appendChild(divElement);

    }

    function deleteAttribute(id)
    {
        document.getElementById(`AttributeElementId${id}`).outerHTML = '';
    }
    function sendData()
    {
        document.getElementById('name_error').innerHTML = '';
        document.getElementById('article_error').innerHTML = '';
        let data = validateAndGetData();
        if(data === false)
        {
            return false;
        }

        let url = "{{route('product.store')}}";
        fetch(url, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
            },
            body: data
        })
            .then(response => {
                if(response.status === 200)
                {
                    location.reload();
                }
                return response.json();
            })
            .then(data => {
                data = data.data;
                console.log(data);
                if(data.name)
                {
                    document.getElementById('name_error').innerHTML = data.name;
                }
                if(data.article)
                {
                    document.getElementById('article_error').innerHTML = data.article;
                }
            });

    }

    function validateAndGetData()
    {
        let name = document.getElementById('name')
        let article = document.getElementById('article');
        let status = document.getElementById('status');
        let attributes = document.querySelectorAll('[id*=AttributeElementId]');
        let attribute_items = {};
        if(!name.value)
        {
            document.getElementById('name_error').innerHTML = "this field is required";
            return false;
        }
        if(!article.value)
        {
            document.getElementById('article_error').innerHTML = "this field is required";
            return false;
        }
        name = name.value;
        article = article.value;
        status = status.value;
        for(let i = 0; i < attributes.length; i++)
        {
            let attribute_name = attributes[i].querySelector('#attribute_name').value;
            let attribute_item = attributes[i].querySelector('#attribute_item').value;
            if(attribute_name && attribute_item)
            {
                attribute_items[attribute_name] = attribute_item;
            }
        }
        let data = new FormData();
        data.append('name', name);
        data.append('article', article);
        data.append('status', status);
        data.append('data', JSON.stringify(attribute_items));
        return data;
    }
</script>
