<x-app-layout>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"
        integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
            #qrcode>img{
                margin: auto;
                padding: 1rem;
                background-color: white;
            }
        </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Qr generator') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="input-group my-3">
            <input type="text" class="form-control" id="text" value="https://novato.pro"
                placeholder="{{ __('Text for transform in qr code') }}">
            <span class="input-group-text">
                <button type="button" class="btn" onclick="generateQr()"><i
                        class="bi bi-arrow-clockwise"></i></button>
            </span>
        </div>
        <div id="qrcode"></div>
        <a id="download" download="qr-generator novato.pro.png">{{__('Download')}} </a>
        <script>
            var qrcode = new QRCode("qrcode");

            function generateQr() {
                var text = document.querySelector('#text').value;
                qrcode.makeCode(text);
                setTimeout(() => {
                    image = document.querySelector('#qrcode>img')
                    link = document.querySelector('#download')
                    link.setAttribute('href', image.getAttribute('src'));
                }, 1000);
            }
            window.addEventListener('load', () => {
                generateQr()
            })
        </script>
    </div>
</x-app-layout>
