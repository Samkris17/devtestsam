<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Report Product</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://unpkg.com/bootstrap-vue@2.22.0/dist/bootstrap-vue.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es2015%2CIntersectionObserver" crossorigin="anonymous"></script>


    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }
        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }
        .further h2:first-of-type {
            padding-top: 0;
        }
        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }
        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }
        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/bootstrap-vue@2.22.0/dist/bootstrap-vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/9.3.1/modules/exporting.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/9.3.1/modules/export-data.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/9.3.1/modules/accessibility.min.js"></script>

    <script type="text/javascript">
        const eventBus = new Vue();
    </script>
</head>

<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo"><a href="https://codeigniter.com" target="_blank"><img height="44" title="CodeIgniter Logo"
                                                                                    alt="Visit CodeIgniter.com official website!"
                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAClCAMAAAC3K3MAAAACJVBMVEUAAADdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBTdSBQGpOIGAAAAt3RSTlMAAwYlGxGPQwXR7ATQ/wcBzci0GoP2UgA143tmAjyjECfato0IKmCthAo0bXaqgQlH7VtIC1B0DokyoZEvSzOFTp6XeT2YORiKIn9MHDHk2VpEd0rHWTtRiGUwRfVJHQ9BxnBGqSMevWxXb25caIZ6lLUpoC4mYxmOLCh1Laimll5zvj8+QkANHzo2n7w3a10gogx8gmfPX7I4F6vYT4t4JCtyWGScu84hjLNim2lqU02sYROAkFWpUS6tAAAVU0lEQVR4Aeza+VITQRSF8ZMRFQ2HcZQYhCwiokZFHUFxUVTEfX//lxHKEkMW0pPc//x+jzD11dyu263/BAAAAAAAAAAAAGqZFA84NScg3ukzZxUOmD93Pr4soL5gLwoIll+wi0xA/B/LFy8JCD5j+cBSLiA+rMblpoBAyw0fujKnOEC+4j9WWwKCJ+GhtsIAbf/VURSgtuIjXQUBrq75yLVcIYDmuvtcVwhgw/1uKAKQFe53s64AwC0f19PsgNsecEfRwCA8cFfArLJNDyqaAmaT3/Ow+wJmkj8oPawnYLauGg4PC3hYOjwsYKt0eFjAsh0eFrDlcTJNCcj/na/CFqTA9qPS4zzWdICdJx7vqaYC1J55hLDFO7gfHOF5rikALzZ9kpeaArDrk/UUB6zbeTSDuOcMI7wSUNX269ITdAVU1HrjScp5AdW09jxRR0A19T1P9lZAJfUlJ9gXKmIOhocF1N45yXsB6XbWnaT4ICBZ/tFp1j4JSPbZqdoCUm2UTrWvIa1cwAi7pZOtakj25WtTwKBv352uoyHznR8/MwHHLS64iq4GzRV28YsPid/snf9fFEeax6snRLq3KesGaEel6aFxjHSEYGM8XxBlXy9ss5c9meAXccWVcRskd4jx2MSgwRzGDQaTze1ijCb3JcldvOSSve97d3/fATPz9NT0U033dM8iC+/faNvqrqrPPFX11FNPc0gQL1qryTpDVxkIb7S22XaMIpwlPLJZvH7uPCObFLmMvhl6TC6jkmcXNmrTIDTN7yM9Jfi4gH3hKNmU6D81ivzMIs8+F40yY+TZ5VKwrn5+GUm8lh/PEECvtHgDhc257UBLKJtBWAYtc4U8s6R+QYOwz2dc5PKel3aSIuogv3XdPEE2IVlaYlLaTMKyr6JdOtVCNp4f00D6dOKiA+QbB8etFc4P7amW4iBJGssa/wt3jb+0LL2uwnI3w7idBvsq+9vqktvTWXjmPaM7dFItLMBUVtCQcTJRZUnj066imGU9K0rXNYskTleNwtIthFz9x21cWKo14yo2XN5I1AM0CDNFQFgRSE5ZO4+nsWQ3Y3UbXK5F/oqjn9N1H7fLTHLm+7VyWzWpZKNx6fpHni2FRsQ+nND877roAW9KdRKWlYCwrPoLC7WvTvnyjQzZYNY5QpiW18z9X9Go2IcYiY0+kqZCZkcZSQ7ZrFEUv7Q3QFgDAmG9Vb7c+Gy73GG7+e18dGU9F38mcTFQ9eZNkhxWrXl0Gqmf/M4/1KJQG8Gvb7QTIrNLC1ZHeSozQ6MS359VeGO9J0h1ENYrEQeRV5UVbG+trKzwzh/M26BY6HUzSzaWuT00EEMuD0p7aWSadRIH9RZdj9Y6JPHtjvqa8gq34ZfYKK+QInXm3VdLDHOP2ml7a8UNRb9Igzmjc5s2EbmcXH55c8BxnPZ2x3EMkwJ2ckPOPC0xH2synXyPbq7XgFiXCKGiNSirN14jAZ13JAL0nqTANZIU3eApiPWy72Wejd0DtsFbmVFikKUbNCoHdFIrqqd5u0viFxx/jT8gFt2xFnSHk3fbb+LXIJIZKbidTUVeG9buzToe4MbXFxJf11vxSjSS79FN/BrkTtRTE7nWiNLqScX+8mZ+GPHGw2scSlpYthynR/ODz4SwtPMba7A66XrsYoRDHVTq6oBHvohxlyC8D1PtpIVlkBrQO5+JkBu28a/hTfVCuhsAecimEbinklrI3QO3kk4QxkXOAbnwq8YSHwQFV+ry3GLpvsU5NRMgLKbKg+Ui78tqTbFcTM5eKZdxEyJUny9dyWGvd7/4b+1R4lk/DBdSJnsV+qCgrifW8s1LJDRvhrA4b/vr/KCZhkf7iNTCDPhtx3EDgwrLOugqJgWUJndYxQMSZoYUb1DPN7VOvVz+4+MqhR9qbVK0iiJnejPinyg+9FvTkxWvZStDMxZbueqWr+UIyd1111gqPnTm1wo8cWiwUlp/7nKUk2gsuav0QKsPuRV8wlXob9zKgBSzya3WdYtb5EWywmKXokWdtslhTM9FxFufbYtgtGbVWElvZlloYeVmFH804sIp5D9DYwEm9Mltbi7X11RdVa3pmuzfcA2YNB9zfa+lKdPWjFKZMn8w781pU4fvaVwdpnVsrcxV36EBLFW20T3/oDLDG0XHq4vsQvUjCGuYhiCtoyOVQcOSh56tKWIgS1BS2RLPgxZ/k8eff7qqBtLusAfb9N/iRaZ9VRoQtn7qBShDxPGKEJNlQiy/b7FN90wjLqyPQ52o0i/jL7NjDhPWAhusuN1ujO65CaRNEBSRpiE5w0hkGqNNpYM3Bs7gH9wQ8DBEkWZv2GV+RwjbblUIy2BomFC3SFgvwguE+KnI4gq9hgjrR2crX16xoi/o1wv0Q0m10XAYcozTaG0kJJ8G1KA3QjRHmoXZaVgOGcvVYVIERDQuPB+vQk4gLAsXFmqwcgEvs5cA8jIFahLWOMVB7DCKPvWGFkqZHSQqBTNiWpvgLfJOrwZHByonL8oqgm4I3hud4N1qXkdH1hUdwYMFFc7W3YExFxWWaq7vitTRNZd/ainjIl3QSUiu0ZBcEtq8R3toCI6QqDyA3+9ceDc9TK5b3VXuaYgM2BEKKO6gtYrrNtmIsD6rnGv7ikyrIdz2skkBs1hEa0WL5SfXlmeWX1jmpHvQmqh8noFbpnzJkhUCTHBLSVdtvjZqfaxxPz5UWJqyRvi5e6aVhuTcOBHAxsO4S5dJVJyIw+ipvPeyu9WiO0DtP0d9vrAxkJD9xCta7fgcWvhn5SLtiiJlVrzvRa/I3/LCQp1uL3i28US2WASbO+G9lSTLxx60s2phzV7JFotRp+G17JKC9j9Y5dV81dzr5bXLXyyU9fbBqw/KdJTG9ikKNPcX2ygj7drj/0kM2xUKP9m4W17j/tXQLsgmGpYmcWZI+UYdksJLEIh1gZEQqAveuP23BGhJ+1ptB3QUH9ast1YNHOrfeQ6Xn/BFIv6zGfRqDuSebtC9R7Uh5m13hW1yVO/eLu9etORuPBq4OzDLepv3gEzD35evvgC/ak/hF7ISiUTU8xEndLEI/sGkQuDXFg3ZiJad2VsVf6lzhoyWmSleeGjDBV6x+q+rnthPy9ziilyqHISAeYHcQFfcs6DBBpHw5q9k9HHUQkuex/1H3UFtdKOyQpkRX5wICKs5y0gNjMGTapvAAzdnk/7wTks6Uth8ZgFdwSJeAPi7RxL4zcyviyOWqMgMeuSiG4tszDUJEqh85vdNNOJKISlcWC561XuN9wM8zqaE+wagrIsxIyRcGoW9gW7yhIXlRIuDlBVRkE4BBvPetZkITHkGRUUYcpU5PytyhU5goWMWNiSkVcFbuX73ihMmSkydxK5iNwPv2qInzOOei3oLC/jH4K9ZbKSwFpFdAnRvGEzFkEp4nrM9YfFupVSIzRt8UQhldBGhsHw/jfYwwvJkbwU7PQD2RLgc+ieInK0OvfmmLsKy37P5FbBa+/d3npJofAV2Uo+0r3gRjUIFYTGIEuoTanOfxHtR9xFcFbiw7J1YAxfCCys9F0lYoZwevHIvVjfpQRg/kQig5IVl9zEDdQniqIH+7H+uNQ6yMdJIaA+jJUEj5cQND8JyxBZELKwpdP0rFNZtXxFZU2BPJHSQnTLR9bbFW27UImu+NpqGGX8y2ZzYtzQA8xJjnVE+Wy+d3DBh9WtYryDCWhKGeGXu8sL6qFzkbIFU8RIiLBcTFvtWJCzYMpnG/XbiU7To84Dz+GXx5AJd0WZhXlrbCSj9OyqmOZshvdFO3Ej7NkpYju+oGsC4oRCa8E99BhcWcKP8Is1+dI1n+kdBwhqofPafCISVsiHUzF8FJhBWJ8OEdR0fgwxx52i+CoGLdL5KWK2ZxIXV3AB1Cp+O4KZJRUQ8Fwz2375JcPBGc/CoLRBWNxefhHsb1kSgBjtQxMK6je5sXCYcM/6fqiOqwnDwIJvFhdUmdgwGMCHO5hRfWLASii4siBCJvSp8OdKi0Gu0B6SagiescHNbRYY/12MacVhxFXXxKc+gPxZGXcaFhRshUbCatCBs77k0xUH61+ArGBm2INSVSmoSlv5pQsI6GklY/2LC3WJhPU5VVsh34yj/xKt2mH5AVv9H8dXRWTy5z5j/t/GJSFiHUWEV8K2ULDJbiC4sK+G0WPZEVRqA0A9S71GcQj2F1Y7ejay/pkLMbW8w+LMGYaUlwZ7Z8rAsZUhGlTtuea3aw3hhIVVgraAV1JtL0OfZvTGEJZv1EtZTwVGLAypZjxFNPLTWTVgOFeewW64UlhtCWI2kBmFNgHdV6NyzjY+POO8McGknHvLTU6zCvagR+iXyPMQJEVFYB2Cgqo+wBsCcw44t7H6vh94ljm6ov7DuZsTLyxFs7QZI3wuEpT3+TsRjdd3V2FJwXjqkCj9IRGCEcuK4bfFrAF9CYvXvhPyuOgKIkdo4z5sXJK8SJxMbN1hhmnIHiUavXZOwFv1js42FldOfCuf/2jBf5BNJFyEhPfolNunE0Q4x3GDiwjIIJqwLuLCWxT+wVl2ICl2IREjED5u5yyqTgHiWu7MjZCIPBKfm8+rjZH3ewYXFm/Uc6glH5jhIR4dfBjmhjwOlK3VFLoqe1we+X1SvDi6sI3Hy9s7XR1iv8wvY0ZJDx76RjRwiHCOhoyHSCjB8EAzov4pv7uPMulhYd3gTqf9Z9C0lpKPVR3kq4NYphtb3vmi6MoA/D186OeIG/TciBo8Aig57j/JgitaPXjaMrmwqtFrxUzpJe95Tj+mBO+sPhfPeyT2xsJD5v1OjsL4IFUxkvnVUtPEki4TlCJ6HXA4U1vW6ZnMSz96VXhITI4GRkDzFZ+98CK79SBILC1vghBCWS+IIy5CR6MN8d/cBCuS731+Cu9YVlt4jEBY8D7uc/om4V/593fktjS+sY5g3Ofmvp+Rbaj9LYaMzuw8HSuNDB6u8eUgnHOwRf1bQFYaWnQkvLP2URKq4gphmCFh4vNLLzAJykVbBnhEaFZ80EV9Gfqmuv0I3uWazas/7jOSYAsbqkMDmU51ExTuysO8o0g+weF6Wgxyk469zIyFx8bQfyC4G9NFJn4oup7/vVzP4qe19kt9v60ZpswUmEFZ6DlPQWyryGiAsVHRdrFpXfWbbmIrnxKiZeZ9xUZMXlvk8wQkXKfGl/x8hOFi7tNrDhc7yn/2CuCA7xUdNzeoCYZlTpcm8JkpqPZ5fPZT3m+fRHnWQvuxiMb4O9TwapgUqOZJBX2MZFxbaG2z1gJk2ewWOTYwkISxwWcQuDMnQJPyNRAqxovZ9XgVs/2Mo+gcddnD9eeXZLq1KnBYVRDdIs1WhbbKCGiHCBs+V+mfMq5XaDMJCqqA9eVeWa/061CJmhNQd6PNQi6XrJel2gmeOcRX6D61Uof+EiXf8hHYQhAocSiynHGAukUhAfBQwNCx51/sXbC+4p6ijzBG48rm3ek31ga7Mq6XqvgJnKd7mchT2UBBWdYS43ZciQMo7P3oHnwhhVbAVxXW/sSwWvOCBXVpMK2cYFs3RpqM328dgXJtsVavSBWh9KgEaHmnVvi8X//FF5DNk+yvhZWGXTmogM2FTIL8wY62x5A7lK1xuDd40uUzPcG5NGNahHq+AI+VeOQuXHpdzmenWSMXHFifLjb7fhl7q6c8VZ6TWtR7NM2R4LBdSBTin3uoesnpBIMIwV9EgiwjL7nJdN+e7mTZbxRd2Fao9Ynz4BrUnT/eS0r+/TqFCH5aM97eJaKHXrLew0qm6fVS/EQ8Aml/hv+AvbgKeqqjuK/OHLev9+VdoJS76+Hz3KkiaE9ZrrfAULv935bpPP4Hu9HaftaqXW7IoyFxWcGHhffYB9eheIV98+Smwnx6+CjWp2PmfGBxPVFhI2pPdBCd2AoC0jHQAxmMJqy6Oi5wbDkglJyviMjpmqRDjcgqduzflcGHxHhu9DU+kj74NeGymAis0hUYAxUA+l6CwkFXhm6RmxvZQMTaf6nNYfO+3b0dIujpCgG+okKbxgK5UrDD5i9LfZ5l4UYjHtQIOvt7KvKQJzi8UnXoaFfHGMClzGo/Iic43dj2F9YsUqZ1h8WhojsikErZX9Hsc4m9MNaM3fe6vv7RgU5yFY3wWL0xYoKufTzYpqOo7R9m63ssOPMqjZQ8qLEg0zaO1tgQfKraHUshZsLjCUnckLKw7la98msRBemLjhnuvL1lFZgodB5RRnfAU7mq+hl3Us53++rP9eJG/8oq8TwXC0mEcnGaqfGpxsUkxxfFY+JF2NEwLHCnAXd7JVo02u7vcVvoVtDlf369j23w/jm1hzESFBa0EmYJiwL7elfYZK8Np0LFB/Uxndc8tX5CRModv2dxdN57zXGE5vshd/iKPyPgXMPkvND+pdgioctZx9hkmuq6BJpsKjmsFWP8OvMtO7a0acZf7VeLx9Ve+Cu1oL+ARQFkSEzZhx59qe8h2op/uZS1Om2FAOxlvHemQRbdmnVuGJ78dzrCKP1899o7RWS6w7Zi0+n+vfrTKF8xX5D4jDQ8f+N0YX+TvP/LTANmrfJlqJPk158JsZbLkIs+V/2911Qrlf/i9rw7OvFHE4o38gxOGXQ6GHnBOVZWor7aRDW207BxTq2p8u/zIXPy+e5Sk532QAv/DSBLostzurNE+J6uZ4C9SfuIUuSqrRExGLow6q7TIOglGkuecIi3Yw3FGxDnyWeGincg0JiMX0X3NdcxZ446s4m10B9pIJvUBSU8dW6eed+RwhmxRpAU8aTcemv5HjHogsT0dCx9VtxZooDrSRmbmj15ZYLN6VBIHOKVjDxIR28LaGhaLd+/Yl0gM4JRv8wTZeoR1Mo5vIWGRwkDZCRvHZGWLfnztZIFsXXAnI/7PW4CjF+yiKA7WPvDre0tuBomQbYvF78Bj/vHPyFaA9RWbY09DzboqRkA1jzGytcES4wK6t2eXJVuDXNEVuKzG+SC+eVwnZFtYwrXx3C0+8cCWQL1uQtau6Fxe29TqJdsQlwIvWDoBmHU2jZyK2wKk/hcONUbl+mrw3NK2uSp/1QKYNQaeFla4PQC7Q3DkYeugL3XlYes0AmobzQ8NbssKOwONc65hqzXK4FCe9kWTSKbhluLCPvo24HEODhbcauinGpUbhSj/4fKnizLZBk1OjvPDONmSFEb/76EeOhVt4TmJbMMjQSwXgtGub92GyeVYyAm/jNy4DcvuMmw0Jnlv+7Z53yYWDw8bvN0yjLMFiWyzTWzYTssjtd0e/98eHAsAAAAADPK3nsWuagEAAAAAAAAAAAAAAABA2mzFN1m8MFwAAAAASUVORK5CYII="></a>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="#">Home</a></li>
            </li>
        </ul>
    </div>

</header>
<!-- CONTENT -->
<div class="container">
    <div id="app">
    <div class="row mt-3">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <h6>Area</h6>
                    </div>
                    <div  class="col-lg-12">
                    <b-form-select v-model="area" class="mb-3" ref="select-area">
                        
                        <template #first>
                            <b-form-select-option :value="undefined" disabled>-- Please select areas --</b-form-select-option>
                        </template>

                        <!-- These options will appear after the ones from 'options' prop -->
                        <template v-for="area in areas">
                            <b-form-select-option :value="area" v-show="!area.disabled || area.disabled === false">{{area.area_name}}</b-form-select-option>
                        </template>
                        </b-form-select>
                    </div>
                </div>

                <template v-if="filters.areas.length > 0">
                    <div class="row">
                        <div class="col-lg-12">
                            <template v-for="area in filters.areas">
                                <b-badge pill variant="primary mr-1" v-bind:key="area.area_id" style="cursor:pointer" @click="unsetArea(area)">{{area.area_name}}&nbsp;<i class="fa fa-times"></i></b-badge>
                            </template>
                        </div>
                    </div>
                </template>
            </div>

            <div class="col-lg-4">
                <div class="row">
                        <div class="col-lg-12">
                            <h6>From Date</h6>
                        </div>
                        <div  class="col-lg-12">
                        <b-form-datepicker id="date-from" v-model="filters.date_from" :max="filters.date_to" class="mb-2"></b-form-datepicker>
                        </div>
                    </div>
            </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <h6>To Date</h6>
                    </div>
                    <div  class="col-lg-12">
                        <b-form-datepicker id="date-to" v-model="filters.date_to" :min="filters.date_from" class="mb-2"></b-form-datepicker>
                    </div>
                </div>

            </div>

            <div class="col-lg-12">
                <b-button variant="outline-primary" class="float-right" @click="refresh" :disabled="loading">View</b-button>
            </div>
    </div>

    <b-overlay :show="loading" rounded="sm">
        <div class="row mt-5">
            <div class="col-lg-12">
                <div id="chart"></div>
            </div>
        </div>
    </b-overlay>

    <b-overlay :show="loading">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12">
            <b-table striped hover :items="items"
                empty-text="There are no records to show">
                <template #empty="scope">
                    <h4>{{ scope.emptyText }}</h4>
                </template>
            </b-table>
            </div>
        </div>
    </b-overlay>

    </div>
</div>

<!-- SCRIPTS -->

<script>
    new Vue({
        el: '#app',
        data() {
            return {
                loading: false,
                area: undefined,
                endpoint: '/api/report',
                filters: {
                    areas: [],
                    date_from: '',
                    date_to: ''
                },
                areas: [],
                chart: [],
                chartInstance: undefined,
                xAxis: {
                    categories: [],
                    crosshair: true
                },

                series: [],
                items: []
            }
        },
        created () {
            let endpoint = `${this.endpoint}/filters`
            this.get(endpoint, 'get', (resp) => {
                if (resp.hasOwnProperty('data')) {
                    this.filters = resp.data
                    
                    this.refresh()
                }
            })

            endpoint = 'api/areas'
            this.get(endpoint, 'get', (resp) => {
                if (resp.hasOwnProperty('data')) {
                    this.areas = resp.data
                }
            })
        },
        mounted () {

            this.chartInstance = Highcharts.chart('chart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Total Nilai per Area'
                },
                subtitle: {
                    text: 'Pitjarus'
                },
                xAxis: this.xAxis,
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Nilai (%)'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: this.series
            });
        },
        methods: {
            refresh() {
                this.getChart();
                this.getTable();
            },
            get(endpoint, reqType = 'post', success_callback = (resp) => console.log(resp), error_callback = (e) => console.log(e)) {
                axios[reqType](endpoint, this.filters)
                .then(res => success_callback(res))
                .catch(e => error_callback(e));
            },
            getChart () {
                this.loading = true;
                const endpoint = `${this.endpoint}/chart`;
                
                this.get(endpoint, 'post', 
                (resp) => {
                    if (resp.hasOwnProperty('data')) {
                        this.xAxis.categories = resp.data.categories;
                        this.series = resp.data.series;
                        this.loading = false;
                    }
                }, 
                (err) => {
                    console.log(err)
                    this.loading = false;
                });
            },
            getTable () {
                this.loading = true;
                const endpoint = `${this.endpoint}/table`;
                
                this.get(endpoint, 'post', 
                (resp) => {
                    if (resp.hasOwnProperty('data')) {
                        this.items = resp.data
                    }
                }, 
                (err) => {
                    console.log(err)
                    this.loading = false;
                });
            },
            unsetArea(area) {
                const i = this.filters.areas.findIndex(el => parseInt(el.area_id) === parseInt(area.area_id));
                const i_original = this.areas.findIndex(el => parseInt(el.area_id) === parseInt(area.area_id));

                this.filters.areas.splice(i, 1);
                this.$set(this.areas[i_original], 'disabled', false)

            },
            resetSelect() {
                const select = this.$refs['select-area']
                select._data.localValue = undefined
            },
            xAxisHandler(newValue) {
                if (this.chartInstance) {
                    this.chartInstance.update({
                        xAxis: newValue
                    }, true, true)
                }
            },
            seriesHandler(newValue) {
                if (this.chartInstance) {
                    this.chartInstance.update({
                        series: newValue
                    }, true, true)
                }
            },
            areaHandler(nv, ov) {
                if (nv) {
                    this.filters.areas.push(nv);
                    const i = this.areas.findIndex(el => el.area_id === nv.area_id);
                    this.areas[i].disabled = true;
                    this.$set(this.areas[i], 'disabled', true)
                    this.area = undefined
                    this.resetSelect()
                }
                
            }
        },
        watch: {
            xAxis: {
                deep: true,
                handler: 'xAxisHandler'
            },
            series: {
                deep: true,
                handler: 'seriesHandler'
            },
            area: 'areaHandler'
        }
    });

    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

</body>
</html>
