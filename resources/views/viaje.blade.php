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

    <div class="bus_box">
        <div class="buses">
            <div class="bus_container">
                <img class="bus" src="{{ asset('img/bus.png') }}" >
                <div class="bus-label">PRIMER PISO</div>
                <ul class="bus_marco">
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                </ul>

                <ul class="bus_marco">
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div>
                            <svg viewBox="0 0 60 60" class="color">
                                <path d="M49.45,0A7.05,7.05,0,1,1,42.4,7.05,7.05,7.05,0,0,1,49.45,0Zm-36,.11a7,7,0,0,1,7,7,7.05,7.05,0,0,1-14.1,0A7,7,0,0,1,13.49.11ZM25.26,35.75h0a2.43,2.43,0,0,1-3.13-1.44l-1.27-3.44s-.14-.5-.14,1.09v21a3.64,3.64,0,0,1,0,.66,3.3,3.3,0,0,1-6.57-.66V39.22h0A.11.11,0,0,0,14,39.1H12.77a.11.11,0,0,0-.08.12v13.7a3.64,3.64,0,0,1,0,.66,3.3,3.3,0,0,1-6.57-.66V32c0-1.56-.09-1.21-.09-1.21L4.71,34.31a2.45,2.45,0,0,1-3.13,1.43A2.47,2.47,0,0,1,.16,32.57l5-15.1a2.67,2.67,0,0,1,2.7-1.74H19a2.81,2.81,0,0,1,2.69,1.76l5,15.09A2.47,2.47,0,0,1,25.26,35.75ZM33,55a1.22,1.22,0,0,1-1.22,1.21h-.51A1.21,1.21,0,0,1,30,55V2A1.21,1.21,0,0,1,31.22.74h.51A1.22,1.22,0,0,1,33,2ZM62.14,35.52a2.06,2.06,0,0,1-2.89-1.17s-.76-1.6-.68-1.15c.26,1.57,1.19,7.35,1.19,7.35a2.28,2.28,0,0,1,0,.45,1.68,1.68,0,0,1-1.75,1.6H55.13a.17.17,0,0,0-.19.17V53.58a2.54,2.54,0,1,1-5,0V42.7s0-.11-.09-.11h-.7a.1.1,0,0,0-.09.1V53.58a2.53,2.53,0,1,1-5,0V42.76s0-.14-.16-.14H41.09a1.68,1.68,0,0,1-.45,0,1.65,1.65,0,0,1-1.22-2s.95-5.39,1.28-7.18c0-.29-.09,0-.09,0l-.47,1h0a2.42,2.42,0,0,1-3.26,1.11,2.47,2.47,0,0,1-1.11-3.3L42,17.62a2.76,2.76,0,0,1,2.55-1.74H55.24c1.4,0,1.71,1,2.06,1.73l6,14.63A2.47,2.47,0,0,1,62.14,35.52Z"></path>
                                <path d="M21.73,17.49A2.81,2.81,0,0,0,19,15.73H7.81a2.67,2.67,0,0,0-2.7,1.74L.16,32.57a2.47,2.47,0,0,0,1.42,3.17,2.45,2.45,0,0,0,3.13-1.43L6,30.75s.09-.35.09,1.21v21a3.3,3.3,0,0,0,6.57.66,3.64,3.64,0,0,0,0-.66V39.22a.11.11,0,0,1,.08-.12H14a.11.11,0,0,1,.11.11h0v13.7a3.3,3.3,0,0,0,6.57.66,3.64,3.64,0,0,0,0-.66V32c0-1.59.14-1.09.14-1.09l1.27,3.44a2.43,2.43,0,0,0,3.13,1.44h0a2.47,2.47,0,0,0,1.43-3.17Z"></path>
                                <ellipse cx="13.49" cy="7.09" rx="7.05" ry="6.98"></ellipse>
                                <circle cx="49.45" cy="7.05" r="7.05"></circle>
                                <path d="M57.3,17.61c-.35-.74-.66-1.73-2.06-1.73H44.56A2.76,2.76,0,0,0,42,17.62L35.76,32.16a2.47,2.47,0,0,0,1.11,3.3,2.42,2.42,0,0,0,3.26-1.11h0l.47-1s.14-.26.09,0c-.33,1.79-1.28,7.18-1.28,7.18a1.65,1.65,0,0,0,1.22,2,1.68,1.68,0,0,0,.45,0h2.72c.19,0,.16.14.16.14V53.58a2.53,2.53,0,1,0,5,0V42.69a.1.1,0,0,1,.09-.1h.7c.1,0,.09.11.09.11V53.58a2.54,2.54,0,1,0,5,0V42.77a.17.17,0,0,1,.19-.17h2.92A1.68,1.68,0,0,0,59.8,41a2.28,2.28,0,0,0,0-.45s-.93-5.78-1.19-7.35c-.08-.45.68,1.15.68,1.15a2.06,2.06,0,0,0,2.89,1.17,2.47,2.47,0,0,0,1.17-3.28Z"></path>
                                <path d="M31.73.74h-.51A1.21,1.21,0,0,0,30,2V55a1.21,1.21,0,0,0,1.21,1.21h.51A1.22,1.22,0,0,0,33,55V2A1.22,1.22,0,0,0,31.73.74Z"></path>
                            </svg>
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div>
                            <svg viewBox="0 0 45 35" class="color">
                                <g data-name="Capa 2">
                                    <path d="M41.32.07V0h-39V.06A2.58,2.58,0,0,0,0,2.38V28a2.64,2.64,0,0,0,.34,1.29,2.4,2.4,0,0,0,2.22,1.3H16.65v3.55H14a1.18,1.18,0,0,0,0,2.35H29.71a1.18,1.18,0,1,0,0-2.35H27V30.57H41.11a2.38,2.38,0,0,0,2.22-1.3A2.53,2.53,0,0,0,43.69,28V2.38A2.63,2.63,0,0,0,41.32.07ZM38.47,4.45V26.13a.16.16,0,0,1-.18.18H5.39c-.13,0-.18-.06-.18-.18V4.26H38.47Z"></path>
                                </g>
                            </svg>
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo ocupado">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo ocupado">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>12
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>12
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>12
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>10
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div class="asiento_circulo disponible">
                            <sup>S/</sup>12
                        </div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                    
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                </ul>
            </div>

            <div class="bus_container">
                <img class="bus" src="{{ asset('img/bus.png') }}" >
                <div class="bus-label">SEGUNDO PISO</div>
                <ul class="bus_marco">
                    <li class="asiento_marco">
                        <div></div>
                    </li>
                </ul>

                <ul class="bus_marco">
                    
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div>
                        <svg viewBox="0 0 45 35" class="color">
                            <g data-name="Capa 2">
                                <path d="M41.32.07V0h-39V.06A2.58,2.58,0,0,0,0,2.38V28a2.64,2.64,0,0,0,.34,1.29,2.4,2.4,0,0,0,2.22,1.3H16.65v3.55H14a1.18,1.18,0,0,0,0,2.35H29.71a1.18,1.18,0,1,0,0-2.35H27V30.57H41.11a2.38,2.38,0,0,0,2.22-1.3A2.53,2.53,0,0,0,43.69,28V2.38A2.63,2.63,0,0,0,41.32.07ZM38.47,4.45V26.13a.16.16,0,0,1-.18.18H5.39c-.13,0-.18-.06-.18-.18V4.26H38.47Z"></path>
                            </g>
                        </svg>
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>15
                    </div>
                </li>
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>15
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>15
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>15
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>14
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo ocupado">
                        <sup>S/</sup>14
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>14
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo promocion">
                        <sup>S/</sup>13
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>14
                    </div>
                </li>
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>14
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div></div>
                </li>
                
                <li class="asiento_marco">
                    <div>
                        <svg viewBox="0 0 210 297" class="color">
                            <g data-name="Capa 2">
                                <path d="M6.1523 43.5l49.4239 0c3.3977,0 6.1523,2.7546 6.1523,6.1523l0 43.2715 43.2715 0c3.3977,0 6.1523,2.7546 6.1523,6.1523l0 43.2716 43.2715 0c3.3977,0 6.1523,2.7546 6.1523,6.1523l0 43.2715 43.2716 0c3.3977,0 6.1523,2.7546 6.1523,6.1523l0 49.4239c0,3.3977 -2.7546,6.1523 -6.1523,6.1523l-197.695 0c-3.3977,0 -6.1523,-2.7546 -6.1523,-6.1523l0 -197.695c0,-3.3977 2.7546,-6.1523 6.1523,-6.1523z"></path>
                            </g>
                        </svg>
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo disponible">
                        <sup>S/</sup>14
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div class="asiento_circulo promocion">
                        <sup>S/</sup>13
                    </div>
                </li>
                
                <li class="asiento_marco">
                    <div><svg viewBox="0 0 45 35" class="color">
                        <g data-name="Capa 2">
                            <path d="M41.32.07V0h-39V.06A2.58,2.58,0,0,0,0,2.38V28a2.64,2.64,0,0,0,.34,1.29,2.4,2.4,0,0,0,2.22,1.3H16.65v3.55H14a1.18,1.18,0,0,0,0,2.35H29.71a1.18,1.18,0,1,0,0-2.35H27V30.57H41.11a2.38,2.38,0,0,0,2.22-1.3A2.53,2.53,0,0,0,43.69,28V2.38A2.63,2.63,0,0,0,41.32.07ZM38.47,4.45V26.13a.16.16,0,0,1-.18.18H5.39c-.13,0-.18-.06-.18-.18V4.26H38.47Z"></path></g></svg></div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div><svg viewBox="0 0 54 54" class="color"><g id="Capa_2" data-name="Capa 2"><path d="M6.83,53.6a1.74,1.74,0,0,1-2.48,0L.74,50a1.76,1.76,0,0,1,0-2.48l14-14a7.77,7.77,0,0,0,1.86.23,5.31,5.31,0,0,0,.69,0l3.26-.27,3.1,3.35Zm43.42-4L46.5,53.39a1.89,1.89,0,0,1-1.31.54h0a1.85,1.85,0,0,1-1.32-.6L22,29.71l-5,.43h-.38a4.54,4.54,0,0,1-3.21-1.32L4.7,20.18A16.06,16.06,0,0,1,1.6,1.84,1.85,1.85,0,0,1,3,.82l.3,0a1.84,1.84,0,0,1,1.3.54L50.25,47h0A1.85,1.85,0,0,1,50.25,49.64Zm3.68-35.8L43.76,24a9.41,9.41,0,0,1-9,2.43L28,19.61a9.41,9.41,0,0,1,2.42-9L40.54.44a1.67,1.67,0,0,1,2.27,0,1.67,1.67,0,0,1,.1,2.37l-9,9-.1.11a2.19,2.19,0,1,0,3.2,3l9-9a1.75,1.75,0,0,1,2.47,2.47l-9,9a2.18,2.18,0,0,0,3.1,3.06l9-9h0a1.66,1.66,0,0,1,2.36,0l0,0A1.68,1.68,0,0,1,53.93,13.84Z"></path></g></svg></div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>15</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>15</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div><svg viewBox="0 0 45 35" class="color"><g data-name="Capa 2"><path d="M41.32.07V0h-39V.06A2.58,2.58,0,0,0,0,2.38V28a2.64,2.64,0,0,0,.34,1.29,2.4,2.4,0,0,0,2.22,1.3H16.65v3.55H14a1.18,1.18,0,0,0,0,2.35H29.71a1.18,1.18,0,1,0,0-2.35H27V30.57H41.11a2.38,2.38,0,0,0,2.22-1.3A2.53,2.53,0,0,0,43.69,28V2.38A2.63,2.63,0,0,0,41.32.07ZM38.47,4.45V26.13a.16.16,0,0,1-.18.18H5.39c-.13,0-.18-.06-.18-.18V4.26H38.47Z"></path></g></svg></div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo promocion"><sup>S/</sup>13</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div><svg viewBox="0 0 45 35" class="color"><g data-name="Capa 2"><path d="M41.32.07V0h-39V.06A2.58,2.58,0,0,0,0,2.38V28a2.64,2.64,0,0,0,.34,1.29,2.4,2.4,0,0,0,2.22,1.3H16.65v3.55H14a1.18,1.18,0,0,0,0,2.35H29.71a1.18,1.18,0,1,0,0-2.35H27V30.57H41.11a2.38,2.38,0,0,0,2.22-1.3A2.53,2.53,0,0,0,43.69,28V2.38A2.63,2.63,0,0,0,41.32.07ZM38.47,4.45V26.13a.16.16,0,0,1-.18.18H5.39c-.13,0-.18-.06-.18-.18V4.26H38.47Z"></path></g></svg></div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div class="asiento_circulo disponible"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div class="asiento_circulo ocupado"><sup>S/</sup>14</div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div><svg viewBox="0 0 60 60" class="color"><path d="M49.45,0A7.05,7.05,0,1,1,42.4,7.05,7.05,7.05,0,0,1,49.45,0Zm-36,.11a7,7,0,0,1,7,7,7.05,7.05,0,0,1-14.1,0A7,7,0,0,1,13.49.11ZM25.26,35.75h0a2.43,2.43,0,0,1-3.13-1.44l-1.27-3.44s-.14-.5-.14,1.09v21a3.64,3.64,0,0,1,0,.66,3.3,3.3,0,0,1-6.57-.66V39.22h0A.11.11,0,0,0,14,39.1H12.77a.11.11,0,0,0-.08.12v13.7a3.64,3.64,0,0,1,0,.66,3.3,3.3,0,0,1-6.57-.66V32c0-1.56-.09-1.21-.09-1.21L4.71,34.31a2.45,2.45,0,0,1-3.13,1.43A2.47,2.47,0,0,1,.16,32.57l5-15.1a2.67,2.67,0,0,1,2.7-1.74H19a2.81,2.81,0,0,1,2.69,1.76l5,15.09A2.47,2.47,0,0,1,25.26,35.75ZM33,55a1.22,1.22,0,0,1-1.22,1.21h-.51A1.21,1.21,0,0,1,30,55V2A1.21,1.21,0,0,1,31.22.74h.51A1.22,1.22,0,0,1,33,2ZM62.14,35.52a2.06,2.06,0,0,1-2.89-1.17s-.76-1.6-.68-1.15c.26,1.57,1.19,7.35,1.19,7.35a2.28,2.28,0,0,1,0,.45,1.68,1.68,0,0,1-1.75,1.6H55.13a.17.17,0,0,0-.19.17V53.58a2.54,2.54,0,1,1-5,0V42.7s0-.11-.09-.11h-.7a.1.1,0,0,0-.09.1V53.58a2.53,2.53,0,1,1-5,0V42.76s0-.14-.16-.14H41.09a1.68,1.68,0,0,1-.45,0,1.65,1.65,0,0,1-1.22-2s.95-5.39,1.28-7.18c0-.29-.09,0-.09,0l-.47,1h0a2.42,2.42,0,0,1-3.26,1.11,2.47,2.47,0,0,1-1.11-3.3L42,17.62a2.76,2.76,0,0,1,2.55-1.74H55.24c1.4,0,1.71,1,2.06,1.73l6,14.63A2.47,2.47,0,0,1,62.14,35.52Z"></path><path d="M21.73,17.49A2.81,2.81,0,0,0,19,15.73H7.81a2.67,2.67,0,0,0-2.7,1.74L.16,32.57a2.47,2.47,0,0,0,1.42,3.17,2.45,2.45,0,0,0,3.13-1.43L6,30.75s.09-.35.09,1.21v21a3.3,3.3,0,0,0,6.57.66,3.64,3.64,0,0,0,0-.66V39.22a.11.11,0,0,1,.08-.12H14a.11.11,0,0,1,.11.11h0v13.7a3.3,3.3,0,0,0,6.57.66,3.64,3.64,0,0,0,0-.66V32c0-1.59.14-1.09.14-1.09l1.27,3.44a2.43,2.43,0,0,0,3.13,1.44h0a2.47,2.47,0,0,0,1.43-3.17Z"></path><ellipse cx="13.49" cy="7.09" rx="7.05" ry="6.98"></ellipse><circle cx="49.45" cy="7.05" r="7.05"></circle><path d="M57.3,17.61c-.35-.74-.66-1.73-2.06-1.73H44.56A2.76,2.76,0,0,0,42,17.62L35.76,32.16a2.47,2.47,0,0,0,1.11,3.3,2.42,2.42,0,0,0,3.26-1.11h0l.47-1s.14-.26.09,0c-.33,1.79-1.28,7.18-1.28,7.18a1.65,1.65,0,0,0,1.22,2,1.68,1.68,0,0,0,.45,0h2.72c.19,0,.16.14.16.14V53.58a2.53,2.53,0,1,0,5,0V42.69a.1.1,0,0,1,.09-.1h.7c.1,0,.09.11.09.11V53.58a2.54,2.54,0,1,0,5,0V42.77a.17.17,0,0,1,.19-.17h2.92A1.68,1.68,0,0,0,59.8,41a2.28,2.28,0,0,0,0-.45s-.93-5.78-1.19-7.35c-.08-.45.68,1.15.68,1.15a2.06,2.06,0,0,0,2.89,1.17,2.47,2.47,0,0,0,1.17-3.28Z"></path><path d="M31.73.74h-.51A1.21,1.21,0,0,0,30,2V55a1.21,1.21,0,0,0,1.21,1.21h.51A1.22,1.22,0,0,0,33,55V2A1.22,1.22,0,0,0,31.73.74Z"></path></svg></div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div></div></li><li class="asiento_marco"><div></div></li>
                
                </ul>
            </div>

        </div>
    </div>    

    
    
    </body>

@endsection


