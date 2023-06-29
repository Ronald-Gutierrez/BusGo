@extends('layouts.app')

@section('content')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bus</title>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        <script src="{{ asset('js/script.js') }}"></script>
    </head>
    
<body>
    <div class="container justify-content-center">
        <div class="d-flex mb-5">
            <div class="btn-tab arrow arrow-color">
                <div>Elige tu asiento</div>
            </div>
            <div class="btn-tab arrow">
                <div>Llena tus datos</div>
            </div>
            <div class="btn-tab arrow">
                <div>Confirma tu reserva</div>
            </div>
        </div>
    </div>

    <div class="piso__header">
        <p class="piso__title">Piso 1</p>
        <img class="" src="{{ asset('img/svg/delantera-bus.svg') }}">
        <br>
    </div>
    <div class="croquis_bus_pisos">
        <div class="bus-container">
            <!-- Primera columna -->
            <div class="column">
                <div class="row">
                    <button class="seat" data-price="10">49</button>
                </div>

                <div class="row">
                    <button class="seat">52</button>
                </div>

                <div class="row">
                    <button class="seat">55</button>
                </div>

                <div class="row">
                    <button class="seat">58</button>
                </div>

                <div class="row">
                    <button class="seat">61</button>
                </div>

                <div class="row">
                    <button class="seat">64</button>
                </div>

                <div class="row">
                    <button class="seat">67</button>
                </div>
            </div>
            <!-- Segunda columna -->
            <div class="column">
                <div class="row">
                    <button class="seat">50</button>
                </div>
                <div class="row">
                    <button class="seat">53</button>
                </div>
                <div class="row">
                    <button class="seat">56</button>
                </div>
                <div class="row">
                    <button class="seat">59</button>
                </div>
                <div class="row">
                    <button class="seat">62</button>
                </div>
                <div class="row">
                    <button class="seat">65</button>
                </div>
                <div class="row">
                    <button class="seat">68</button>
                </div>
            </div>
                <!-- Tercera columna -->
            <div class="column">
                <div class="row">
                    <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                </div>

                <div class="row">
                <div class="seat" id="empty-seat"></div>
                </div>

                <div class="row">
                <div class="seat" id="empty-seat"></div>
                </div>

                <div class="row">
                    <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                </div>
            </div>
            <!-- cuarta columna -->
            <div class="column">
            <div class="row">
                    <button class="seat">51</button>
                </div>

                <div class="row">
                    <button class="seat">54</button>
                </div>

                <div class="row">
                    <button class="seat">57</button>
                </div>
                <div class="row">
                    <button class="seat">60</button>
                </div>

                <div class="row">
                    <img class="h-8 w-auto" src="{{ asset('img/svg/baño.svg') }}" alt="baño" >
                </div>

                <div class="row">
                    <button class="seat">66</button>
                </div>

                <div class="row">
                    <button class="seat">69</button>
                </div>
            </div>
            <!-- quinta columna -->

            <div class="column">
                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <button class="seat">1</button>
                </div>

                <div class="row">
                    <button class="seat">5</button>
                </div>

                <div class="row">
                    <button class="seat">9</button>
                </div>

                <div class="row">
                    <button class="seat">13</button>
                </div>

                <div class="row">
                    <button class="seat">17</button>
                </div>

                <div class="row">
                    <button class="seat">21</button>
                </div>
                <div class="row">
                    <button class="seat">25</button>
                </div>
                <div class="row">
                    <button class="seat">29</button>
                </div>
                <div class="row">
                    <button class="seat">33</button>
                </div>
                <div class="row">
                    <button class="seat">37</button>
                </div>
                <div class="row">
                    <button class="seat">41</button>
                </div>
                <div class="row">
                    <button class="seat">45</button>
                </div>
            </div>
            
            <div class="column">
                <div class="row">
                    <button class="seat">2</button>
                </div>

                <div class="row">
                    <button class="seat">6</button>
                </div>

                <div class="row">
                    <button class="seat">10</button>
                </div>

                <div class="row">
                    <button class="seat">14</button>
                </div>

                <div class="row">
                    <button class="seat">18</button>
                </div>

                <div class="row">
                    <button class="seat">22</button>
                </div>
                <div class="row">
                    <button class="seat">26</button>
                </div>
                <div class="row">
                    <button class="seat">30</button>
                </div>
                <div class="row">
                    <button class="seat">34</button>
                </div>
                <div class="row">
                    <button class="seat">38</button>
                </div>
                <div class="row">
                    <button class="seat">42</button>
                </div>
                <div class="row">
                    <button class="seat">46</button>
                </div>
            </div>
                <!-- Tercera columna -->
                <div class="column">
                <div class="row">
                    <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>

                <div class="row">
                    <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                </div>
                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>
                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>
                
                <div class="row">
                    <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                </div>
                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>
                <div class="row">
                    <button class="seat" id="empty-seat"></button>
                </div>
                <div class="row">
                    <img class="h-8 w-auto" src="{{ asset('img/svg/tv.svg') }}" alt="tv" >
                </div>
            </div>
            
            <div class="column">
                <div class="row">
                    <button class="seat">3</button>
                </div>

                <div class="row">
                    <button class="seat">7</button>
                </div>

                <div class="row">
                    <button class="seat">11</button>
                </div>

                <div class="row">
                    <button class="seat">15</button>
                </div>

                <div class="row">
                    <button class="seat">19</button>
                </div>

                <div class="row">
                    <button class="seat">23</button>
                </div>

                <div class="row">
                    <button class="seat">27</button>
                </div>
                <div class="row">
                    <button class="seat">31</button>
                </div>
                <div class="row">
                    <button class="seat">35</button>
                </div>
                <div class="row">
                    <button class="seat">39</button>
                </div>
                <div class="row">
                    <button class="seat">43</button>
                </div>
                <div class="row">
                    <button class="seat">47</button>
                </div>
            </div>
            <div class="column">
                <div class="row">
                    <button class="seat">4</button>
                </div>

                <div class="row">
                    <button class="seat">8</button>
                </div>

                <div class="row">
                    <button class="seat">12</button>
                </div>

                <div class="row">
                    <button class="seat">16</button>
                </div>

                <div class="row">
                    <button class="seat">20</button>
                </div>

                <div class="row">
                    <button class="seat">24</button>
                </div>

                <div class="row">
                    <button class="seat">28</button>
                </div>
                <div class="row">
                    <button class="seat">32</button>
                </div>
                <div class="row">
                    <button class="seat">36</button>
                </div>
                <div class="row">
                    <button class="seat">40</button>
                </div>
                <div class="row">
                    <button class="seat">44</button>
                </div>
                <div class="row">
                    <button class="seat">48</button>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
