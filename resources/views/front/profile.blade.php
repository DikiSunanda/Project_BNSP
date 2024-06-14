<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SMP Negeri 4 Kuningan | Jl. RE Martadinata</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front')}}/css/styles.css" rel="stylesheet" />
        <style>
            body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
        </style>
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Sempatku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/beranda') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/galeri') }}">Galeri</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="main-body">
            
                  <!-- /Breadcrumb -->
            
                  <div class="row gutters-sm">
                    <div class="col-md-12 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAACQFBMVEUAmf///wG8/1j//////wAAmv5l/wAAnP//MwAAnv/L5/gAiO0AoP8Aov////0Al/8AAACz2u69/lwAlP9u/wDpHAAAhOTo7hD08wC8eRD0/P6pqQ2VyuXNzdfU01Lh4d3FwwlSrOXd8/olGAsAjPdEpex4vt8AkeTJ/2NpteTMygiHhBKg0O4Ag+2ioQvt6wB0nD8AXsPO0i617lzc2wDV0gAAet0Aj/AAlO8Ag9wAaL0Ad8Fc7QAAgdIAeMsAa6zx9uuo2FdeeTA1QSI9TCSUwUyBqD+j209VbS0AABt0kkIAaLQAXaEAaMYAADAAAElM1QBBuACosDi4sADUHABVxwAASIUASQBXipsAValxaw09lGosjACAj0/NxtsAPYIAUIK624mq6jzK56Xd7Mmb1TXY6bi4335YYzUoLyANFgk2NyCKoUwRCBQoHR+r02FBVyFreEUbABsZIwwYAABuupXC63rR85yf15Ztt785g6stY3x6hiMrbpkXQGKCmABYZwB2pGFwkls8cH0AIURbgCArS1wgLDpGSgBedVIAGVlokW2sr69TcIg8aBkAL4gbdxmKeYtiqVFEXUpvkbSRj5IwmEc/qTpZhoZMuzd/i4A0cjtOUESptVaNonN0w1EYRj+NuoNlZSUndGZHOQC3HgBpbGpKTndgOEuTEwC6OiqIJxqUN0lkYZZsU3iASWaisZiINwCsRABaTmAAKwAAFHAoi5QrlIYAMaWpnLFTpAAqXDpAGjkmL2NHMFm5uXE/pb0AAAAgAElEQVR4nMV9jUMb15XvyJrLZKoZhhWU6qElKClZVKlIgL6RhCxAEuWjARQIELAVN0lxjGtout33ZMTGIcUmBn9R2wQbkuKUbvejz/uyTWq62f5r75x7R9JIGgmcTbPjBGOQZu7vnnPP+Z2Pe8UZn+eqr28xvnnBfObbuy5c+En9qYfHPR8Wo/GtbxULwnnrrwIGsZx9+7mwmM35L1/3Ml948+xpZfNckgEsV045BLv5jNmTSsVTACQVV9F4UuYCwudA80698XRwnksyxrM/PYWSmT3xeCKZsMcXh4ZWBoft5q4hO/vF0DL9JtVFkZ4a0ttv/RXAGM++eaHmU+1mmHRzfGhxcWglaU9cTAKqhpS5q59iMCcbKCr422729A97zIlT4rlySj07NZh6KpeaUOLDQ0NdHgoi5TGfSQzG7XZ7QyIPJv7uAgVj77pojy8Pxc3xAQ/K8WREF978BsHU0z9nf1n1aWaUSWJwJZ5YHrbHBxCEB8balexavmhXwZgvxVHfzGfsQwvxQZCLOXnJA1iGEmYP/L4WJPOFnzDz802AgRvVG99KVUXiSQ502c2oOOZ4wpxaHuofGBi0xy8NLL8Lk0/BmO1DS/ZhJpnBSw2D+JP+RVTKiwl7F77KXB2Q+QygOYWqnRKM0fiTt/Ufc8aTGGy43IWCiJvtKBLP0OBwVyJ1JjWYgKEOq5JJNTQ0XG4Yhu/sA9+P/yxpBwmBITiTWIY3NICu2auuIDP+eecUwzzlmqmP65sx0K6uBlgn8Hf8EoAZaIDx9iftaAhSiwmzPdFwhYEBkPH+QTRh9veunFla9pg9g3F4P/wyvni564x5eNmOBr3KlKFs/ptg6qmCGeuricXT32X3vBcH4xT3pAavwNq+khyyDw978EoNJmG++9+1qwYAxku/iTfYz3guLdnjFwGMfbHfPtw/vAjz0GVHk1HVCYHzxHVTa+mcAAaxnH1LTyxmD5gie3LIY1/uj/cPLMfN/SsemNrksmf40sriwHv99mSCaqHHnlKVBVwo/CSO3iY5mEqBKM2eiwlzfzLe4PG8CzYc7jZc1bpd+OlZOp6vLxlj/VtvXqBaWw4mCcbVHAdVSlxe7AeFggU/nEh0XUqaE/3DyUTKc4YpTfGdjNvANMBfnuGEfXgxkRhe9sRBHu/FuwbtqeWE/crllSqmzWy+EH+r3ljLEFQBo+oXSOUfPBd0bw5r5RIsluF+j6fhCmo7OJj+wUGARQ11YfAl78l/NVMH6+laHhxKUOkuDgNVSCym7EOXLoESxj36wnkbVK2GolUHg1De+SlC0RkRjuby0NByAtV8YNieSvYDMiBjp3CBmlul4mDNu7rQ5YCi9YOPGlyCFQWozPoM7sIv3zlrrKpr+mCYVH7yy0ooqCZm+hx7/7Kna2B4oMucvNw/ONQVf25yzFyLGSfA03DJnhqA5dMP5gG+VnM68MqfvlWVd1ZbM/XvvKk7yWCflpCKoAVoiJuvLDa867EDf/F8XZ7PlqN9eMkMLhXMux1EBKjsqUTKrvdqWG5vvlVF10rAUMtHI7A3q2mt3XNpIDk0hL81D4FD93T9PH4aenUiJrMZzHxXv8feEO9atNuH37307mKV25pBOoyVlFnqUskw9XozfqHqM7veBRWID1Bv7XkvZT6jZ+m+Lp74eyCSXyyAtR5Gfrc4oCMb9tILcT1GwJVCAUMcv1BjdOYlYB7mxKU4fu9ZHLarC+gbggP3Ng81LNsTl+NIGn6WrH7vC2+/SQ21vmTqz4LxevsC3ONMlQHij+2Di/YEewgsRqqL35xo6JLs+hEIBjgccM+hfl3R5B93IfXmW2e1aLh6huOtd34av3Ch9sPQQ4LdWRyoMWH//cvTb0eWZO+/Yk8kzGeqmDX1uvD2T985ezafJOBePh0QvGni4rug013oI7+pketdoLrDw+B+Li55TkyHmDEZ9ct/eOett86efdnI/T04kwvsPScN0QxhCqBZHP4rJ5vAEiwnPfalhhQuo8QJemCmgFK//If//Q73f/4+mTKbTxInzhfQyv7hS0CfLp02dv/alzmx3A8OGVgSUKSfV/ES6kvPqGTh7eRPuJdM4RkIrU4SS3w4AWRqKL4EhD/5VwcDBDvZD2sn2b+Y7B+q6cbMzG68fS2bNXI/UEggut51whvsKw0D/XF717B9eCD1DRrjqg+E2U4lBy9fuoI5gpNea0/1Z6ONryAYSRAC0aurNeDA6D2Dl/ov9ccHPfZkNU/2TV6oOp4fJVPD/cnFkxJsYPxyoSDhKBhCr+DaP9rtek5DZfMQzXtWLjcsfFNO5RQXLGXPcAM1N+YqMwg6Y38/E+AEjuNeQjAch2BEuXktWWXt0NulftZljw8MfhtyKT7YHH+csMOAlwY9lbOMdsvTPy0SEQSigoG/4RIaFdkPcPRumVjpwkjyF0m47bcoGbwgckOtaFiuWAWUHQ5Pd0qKxIkAQFElgxcRQDri2FpX2frG/MvA8jCE/EBjrnxj1OWUl2coafcsvLdwaalCI4DvXss0yyIIBcRBGJhGQYWD2iaS3qvXyuDEBxN2e3IAuEz8G+D6z3eZE4nkwHIqccl+pnyOU9dyfkkg6tgVFQwpgoH/JYCTfFvzTnPXisecbOjqX/zWoeDTE4ug4ug/UxqrZkcoIYBCCmhI4w9KwAA+NG1SYGRdo2zm5HKi63LCnlp8/sD4G7g8MBIMpZPLyfyP4AcfZP2iCEiEwtApmL9rLP6A/VQRxEB4fZiSHDPN9A2Aop1JLNakFX/Fy748nBoaTKY0UPo4iS4U7bApGEK48osgK/iVR01EeuIpuyc+sPQ/IBd6xRsWBvtVVTHb3+7PNcPaFsqHXAMMEQPRjfc9NANmNgOJuagfKH0Ll3m54VLe9NjfHsoGOZFwFWNW1UwHDBhqhYhCCOGcoX42Gf+2PUwBi32oy84CFHvq/VwQlzVXHYxSCSYvn9CHv/J8k0mLrweHaZjd8z56+3L9YheY5tpgOE4WpBEG53/yMtPSXKp/OiATperMnyAZKhw5OLIGbvR/asGoaMCCgbdHDinoLAoG5u9OAMPcqDC7tvQtBDHVsTAogkJ0Fn5hpBSMUksy7IUSGdn4Grnk8jF9rfdgTe7aaB8SF6WqjhXA1FQzdglEDI1cHX5uOGDTNYkcs1qVfs5bJG7m+kSpukyeFwxQbEpyIHA+/VBgRpNwJVL599g9CfoDz+nXH0D5IBeCxwtM5WuAERDM354GDF07ApCc/tQp4FAWZE92JeKpVDye6EpQX2Ufhh/glRiOn2pKwLvFh3Ih8PYnjg+vU4NRwQvB8Mb7p4Pj6U9g4phWnXH0dvjiof/EitlwbeGofiW1nAso1azXfxcMrB1B7LgOcGrjwbLssr2QVYQoajjepYlhgbSeyI3M9tSN0aACzOV0w2Nr5vnAwDoUR35866SEiWdRW2XFhFtS7cDIp0dOQGNOLU8HAQgEjjVMmA4Y5bSCZG8isjTy6lCqZjp3UTtUrJb3l+ZYQTZdVfsX0EUuorfXJy7VrvYf1gOYE4xeORj4IgVHXu2PVy3NmJNXzCXjMyfiXfHSl3iSeq04KpTN6ZB0Wn0pDIyBeS7JMEBAckY/WqjmdzxdntIRxpOw6Etfa9bPh4NGpgAKpilIbVtcDcxzYqHiQThr+m7UnEiUaKDZfCUBhrksTk3pZbXMnsQHAAUsWCmS0zgPCuZ0C6zy3YIYHNnAdLpWBqh6EPuULidPAlZYUsPuaFIxUVF8APt9M9YniRUigX8L+eRFVXJ2IpiafBpC19DIRr8GDha8wcX3x0tNlQfT0wmtFNGpgjNNFMrjlOqgt9db9QpNuQqYwBCFasonqGCq66ZSndthZM2JKJ2hhDoie3I4iU5+eLjEx5tTAMYc1+oe0JSufiQEyaVkPiBObCIUdCvl4xUlURSlQF9AImG5mmiEmtZMERVRJrUWIuU4JDCCrADHPEw1B9QsUeLjzSgZMGh5HMhTgB+gMpqxCS2B70ncyDVTPSp7GEhE6pu+mpkd3d7aDsRuhaoMR10z1cDAvJPbflmpaVVotCTGrt+IA1/J54KS2O40VETjSXjgh54zRUawiPV39eUe4G7xG7GAfthFOGn0WUt9S1trfX399p2m27L+eFQw7dUkIyjXedesXB2JehvQZXn0R9jipDZhYZFYiwYbN+0LaoWBcZ2CNcM0RbJhlOCy1x2kNHauPt+lcDdSN99cE0w1yRAxw/N8T690krUTGgknd6z9eCil0hUzLSvGC3VciAXsnqXC+rdTrsP8DIZeA6OjIUmpJn8x18Z6zOqNbfcidU3n5ecGA4Ze6rXxBt590ySeAAYuReoLB0dfXU7R6bcvoeWCRZFXKzDWXQWTYAZ1xN/SLixPfOd8QA7GgvrhCgxD+XVbvXHr5hZ8vT9eV9e0oy8ZhbR/x8j9TRXJkM4FC28w8C/2ngKMGIoFRWQF/TRbZwauA8FI0ccDNyu4SLRtTBXtCKVZEjg5FiV6T0HnLKFk7tRNfNDaCoKpa3rQXkWRKBjdNaMAOe4BLAbeFzsF3xM6YjAmIgErQDigYthDligCGC4AM3ehSwUlA2+/eR68PZhiITiq+xAAEwiMApj5urrIvc3xprq6uod+/ckVOikY3Ywm4XbdFIx3hvndmkRJiEUFaqnF0Ci4Ubs93oVtwHFz3qnEEwV/0oW95kmPJ3FztI9m9OBZ0rSs5+0guM39egsWzB2AERkHwdTVfTymD4aYqJrpgzEdWFQwLIwhpJwwaV4djIUoZDTUUQonlUym4gnMXwAwpDKJrqSZbWtIJbquAJQYentmXBQpE9RduSR6n/bF7NQVro/HpBpgdCXDif5JioX3ZqnflAS8OH2VAzDBQtFHIKGRnfcTnniivz8B7AYcPV1HqXiyKwk/GOqKxxObMert1bcAGFHv1gBmy9h69+7eYFMBDKiZ/hqvBWbsRVz+PO+IyZLS3jnm9/ubdadPBVMYC9AcoWNkEOAkksBtUvlaBG6ZwXxGlydxI9YsIMtSDROC0TUAgmT63eYn4+NMwdj1oF3XuSpcs64BIJhZEigYtGbdY5mV/UlrOm1b6KtmCwiuGc0/CcAbuDGMhLNYgWP9avbVS7mAUHIjkHtG1+CSvkeAQ5VKE/vukSIhK6xk1iZ9a4axt6yCsTgf2yw8uyb91VIlYjRWpsmiFIxdWk6UZz7sicHrHWgrtJ4YYr2Mru6QwPpUXsHGd+4+ngBIP787KocClVpZDQyQx76gf58KxusEKAb6reWgsxoYZppL7wEAc9cHE8WUO9LJgVkxHBZLqQsIJhrWBQPOPjahgvnknNH47M9NE8+Mrb25XLCycqYPBuSSda3GDiyIwOFiUBBXVnfJMLUP95UOB1QhHJUDueuLhT5cT+JT8PYiyQTRt2jeLYAxI4qO9ReJKPY+pAsm8psWIGctm5tGY9v2xw8CFUusmgEggQVY+HNeZDNOiwqGN+zruCuFsmbCCdFYUCLan8ugeZgryK0NYToQoOycDwIUTgqDShZELCjA8cMxavhFHcETeewNZDGR3wCKrVYjeNDWa5HjjvJXKpw+GKD0PsBhtYIxszrzgjGkY7rFT1E0deCKDwOhIfkkF9iQ6CgNPUQ5lAO/E088mcXYHnMuUiwqFW6FVj+Khp26XN0HdOLCQTD35+eftgKW8aapbLmPrQqGPEarbDmc9PVc8uG3aKOtOR0fTcAs9e3GRHxTGGVDwQAXEsOjUYzl0TmJ0dzGeiwkiYrAeo6EWLjQWgHiiMY66CKK5porK6/wBEmJTUzM7xmNe5Gmic2te8BqIutVwZRjaQRxwB/XSPbT3+E3uHSWYoFyJQCjJEiduUnHiEwXWjQWDkoCRLgiqFisQ2B1VExGiNEOAawpDoD+UAwjs0QEkhiMgf+kr8y6bvZxFbEmBv/y9NYWiiTS1DQ+gUuo6Um5BPTBwJvb0xSMI2yaXkeT7E4vzPjR+ZRPGuF6D3y8LcjMshjqi8XCcMHXqCAqxTUOCDmx5J1ReFFfMBSFd0SDImN/rzjck7nG8twMLibhc4zOKGtWfc6TwCnBSH4bXfHu7Pngss81d8Pp7AuIOuVqoTE2CYbbyVQdPT8MLxyOhkIBzRJHMy1JijZPBIseXxkbHYl2BAU2fEI60rzFt9MsVzxInm2lYD6pOxGMqXzCJZMN1wlv2cjII1/Npb0Wd45Sj7KQE0JRB75uR7XOuIDpksAUl1AcEYw1rPrUPH8RMQ8mBINoCUUGkpCQE7TAsjomlzxIARp6nYaa5z4+GUx7CRHB55nSlGNaPpO659zwABxvORC0yWtuSgy2q8XVClgCDmQixX772u+CIHL4o114pRSGNC8wS4M5C05j2IQRFMy5o+MCs6lr+qJ8QHpqBsuyI9BI7THvznWneer++Z1yfysSibtIjQNvyVWJDNBvgIaJ4r+99sILgEYm0evR6vlwCDrgbrhWp0sdjjx969atO0hlmiga+Guqwn/rrhnSuOm6+ilCAGv2ft5hXi23hPDPNRpVUzDVhicEf/d5SIwBFkATk4L/9NrvxKp5OGLapZKG4DbDaRKXYF0fIQyKoy6CV91xh6iU3khXMlKvj7fMORDF3IdulZXZwlyZ8yfiqI/KDAWoM9v0OYKQ+e4Lv4/9/gV6/TYGqF6LCdUSrCSw62VEnXfkimoGzEfufhhRFWz83t6zZzcnHgVE9GA6YLQqJLRvwvQYnMCUbZfSqmDcmwGlhBQDJ+mdpJOIcHIVZo6QAHgbQYz9M4L4LgPzwr/8C3z51ygN5PTIhDLjNTAPbZgMl5g0eeQBs8rje+fQrm1th0OiFAqeAAZiMkovNw72NwfddE3w7oVQ6cPBcZhWLAUCul1Bx4Ft/Rv4mtAf8jjo9V38129zv/ttRtBLKZAABcO8wkKzZtrBkvd9OQXLf/ypuk2zbevX4b43Yhp10QUTo/zFvdc5dnuSQjE49kLleg72yUHFQp+8U8FzwMW/9to//+v//ecXKq7X/vW3L/yLpFeZADVz52/J+2Y0r0APZsq9MTV+E6Fs7W21GI1n7z4Yz+mAKZn0GS9dhPv+6HQPdf6r2UDZPAKyzgN3gYDyc0pFACoEf4uiqMRCxfPboM66AY+wZync07Aa0toA5E6h7J9bAczWx+MfP20xnrsXiTypbQCIsuumWvviWHjNZXWuWh3WmFROyog4YuWLYFzBClMniL/XAVKQTl8FNUIw1M/kb+rIlids5ZEtTNHeAZM28fQZUJvIl40aVdSRTCOAoZH/bDQwvepzWwzu3UotgqXKyDR9rW+kvGUVDNA/1QDz3ZhO/hoYwKpmhix7phIwCmn+NcQyxqMmtNHHvwLzFnnjBDDcLl2EfM9077qXujD3QXOFYDpvFrUMXjxdVilAopupCUYv+Y3cTCOahUCp0ZH6kAeAYBgFwKxgJZiXtTNApBhzHz23N73M+7tvlpM3TvDva+YQFo1Y0eYlRF+roWbRymKfIDZuew2aGXKVBJMkGM08Pjq6/wdN0klnzWjAQITB9fZQBbL+2Kr6RO92hfcX+yY1ggG83RI4ldIXSf9eHczvK3OSECJEXQUDiU+2dmjXFQl8MY5kZqJJA+ZqLTBcIJcd20TvYnEWYv/JsYpglmjBIPbDTqF8EZCYni1j15pIKgJFsXnBoJ0hlEyJaMITdRog1IP2Vpjml4taRKIur2vACRTAO2dTBWOLcRVghLC1RDK85Wqg3NgKwj99V/964ffR0vZE/IcQOHIbSu7pDIraCRJNT8YpOasrpNAfdopFKqGC6SzeN2sDd3V9b39/YY6ZfEs6Vx44UMmUggFDmlNKIkQwAdzov/8v3ev/fUVKQ32MfpSMV2tS0AA0lyiuIERVSlM3de83v/lkHLRM5Irl43IwhJuB2eHTvf5Qr4u6TsdCuHynAJ2l0jWD36ch3tVIEGKX3L7N+z2dy+vYv1qeBBSUnK10egz8pqnUvUGE95DKZWKrtaWt9enxvF9g4aA+GNMejY52RJIF6uy1zrnWZL2Edok1U+FYcwFJaxV7bXzVyzdb2uYjlmOBf7hnSlUCY9cwymb8Ptv623rULBExEBRKwJiKYFZYVqZdyBztzmwcOtzWMblMMhDFCqLpwGIom0mDbTuAjW7qzeTz5b/XjnVaLEyRwKGOqSu0CAYYAMfazYpPFpTon8eb7rUAjs9bgQvcH+Fif+4gVcAEPqBg3LNyhvg3MF9uKfeHMItys9CIkUf5aH3bjRAjqzcTe9UgVQcKKHKxB55AcJGzlb8EZjQqCsGAVi8UBcKK2J09Y9vRxPgy0LT61p2JQjawEswCi1C+EkabVy00XNksVzNBGLlOxJyjEgzv3mmUlfzLxZE5mu2ouAyOuZgm1CNMx/hyMEvNkjiakbVgBCKfv7sFCjYPa+c/kKcd1zV9YaoGZo+BmesbcbLY3/BpuX8TFGdPd77eoXk4dbWHGgskk84/Xm74xfdLrl80NPyxW8H0S/6hkmnbwRsqZsa7a+Kkw7Rfo+QKJ0/jQS0tW1gYiPzB2HYAbvTLgI4BwAZMNTriXeezjFnwlttyGfuXpg3ujNSJBc9SW0oVaK45b/gJCa7b9ARjO9JWDKXAkY9NRalogDRLYzbDWsHg4/ak5vtINdsOaE5zvhVBNT0xsVpPqTUDxm2KshyT448qGedXO8sJcaeLtyx1SjM6iwbROMPq08EiOnimZoVfUvHx3kI2B/eDHXn1VhY/2SdI07yWfhBy9c6tp61txrZ7zHN+fg3J5heKHhhCOnZ3F2h+xP2Rg2UWbLPaMgXWu8RZeEXPiDzWowOGZ2jU3CWYd91xurcLDkQ2bbp1XgLXgV+CaePdhYoaRJux8aaJOx9sbR2zhNMEMgJqACrAgBkMO9w2V9rndUx+nyX+e3JSWZ6OU3ZoC0pj50KlcVZzETE18OxY8Fkq1cziW4gWiK3pyK1r8XjvbiPJwbRZDtqLYPwPIZaJTByP5zOB8B8t1BTBtDBNAjAZ1IG59Zns9BzNY7g+LGf2RKAFdd4alnL6w4BlNhlG50Hj3JtLTlfptXQzG2IEG0anbHv1zTfQI3FsEr+b9AtFTroeqSu7Ivn1Xw6GrNEEXK5dngYBW6yLh5OxUrsMz++mIaZ3Vxnr0VkzVDqW1T5C+7lFbuzIaiu5rDtjHCsIYMFttMIm528yOUbWMeUFGl0kSZL/YSE9Oz5Be08+Dgt6YICBbNDV7wrKa07H6s5i2s07G8sKleIsa9uYjHIrFv0lAex0oZkmzzmSreA0jqzay0A4aWzSoAsG5uPA1Gul3/pyRTouCKOqhjVNPN368zhAyhaoYx4M1SWYSAbGm5My4WjGhYkNiLpK43Bp2kJzf+7dxvMWHfdgoEbLux2QKPRYBRhsK1ILAaab7iokAW6vBubY7FIYAUzsDss1TzxtqW97vSnyJCTmN26VgIG4dYOZsJVQRthgMTNf7makDJMHhE7+dCmf0kxsPl8jCLFDq7W4YKyulViBPgqxcqJcEC1ADtvYVGnTKaIgdN6hwf819DdbE28EJKrQQgUYIo3SGIZPh6MxNenr7S6jZuJ0PgDdbD/kq2kJ8HdVlUT5/Pua5f/YX2jwF/xLelCYbF/8E9bt8d7eXU3koyhSaP749ePjVmPbM6Ox4avpKO50FCvUTFDANNNbWa6H5lSf6WovzbQL8uz31CJHOvqVjufOg0mzJidRHPWWuP99v8qDiZJ1VIECi27/aj4r753RlgM4In+1ZWxtNbY+mvgP7HTcCgfC66NyEUwzx2aRcKxMzn/W6zOwAk1GUkqydUTuZvkO+LPyJ57XN0b4ig1agAZpl4KZZC1JCmb89A0ZLZIcrqo5eTAAYrGsRAJKI4tmbkbqmnYw73z/1gRLBZSAwQcw38HPrTFQ7sUAKQXDCZ2FGNP7ahUs9L1O3JIENs2/aXMUL2vGpNIDEk5XM8vw4EM16UT7XYs6Hspmc1sIYWsKI85nWOaMNB2bBD0wgQUUifuQVc69myFSCgblvJKHwFv1rRkbha+X7tYPzWzOOYvX4c0ZllEUTbtVnC6dRSev0gnUy0KNQfA/nJr45Gmr0XhAcxubba33Ik1NtwStZNhiRckszDn3l3Y/QoNqSe82V3Q7YERRLGVUGwyd0vMyiEb0T1pKr0lK6omgzStXXvkilwGIU9HPkMY3mrDc1MrKzk1Td69hB+pVsQQMhQ0a6bT4XBk/90c377atHlbkmEhoJCj5q3ntMjA76AHEzqVSekZnGsF0WE++CbKrUTlQaMsTpKtYom365GiKcZlbyAImopwGjEk1zaQDU/uTYflD1+puzummHKtkwYSOYkTcOQUUZM/4ZqF9wVL6C7WZSMg6TgEGqRk3Gs5zKiBTU0gvm6YYEWiicQ1WBDVgGOsUSJSG4guBTEfQvwIPdpalzIjpwNkhj3irBfclYKzYmyY0Hlj4kl8wMIKSrb5kNDexrAkxZ7YYn3GPmvJ8uZDWzLEcXEHNqJ8hYpjGr95YRlTWMUfry5ZWkQjZdR+2c3OnEk26E+lZ481SyVj+0sms2fbJE4Luyt886StUyUVBms3Tf1oGwP/mQ6zZgoExqhULgYSZp/pgWmalAMt2ecUs5zUMkJivhhkrjMWGLZBEKQWDDJJ1Mm+fLBj4/6PAIVDTQiwHaP7MyFnT/H82zGMifXzdpAdG5KJUj3nbhsJss2W7LDTDJnRLJrB5SjBMlmVgmGQCJ648fIare9PC27LFyVQk/zGVyzzY589vNaFg1BWVB6PGM0q+2HNR5fneXFmFGwMm3pvBTPOpwBBBvFq6NtwHJuYHTgGGd99eh/VpDWuzvnIGLRlWnY3G+3fUGIBw5ZIhXGCVUYjDDPOKwH0rLABYWt/Vbd0kROlY0lQENCDVvDgPhjs6eeFZHmP1id/3F9MAQCoDO5+MjzAYpBkAABbXSURBVN8D1txmbLl//MAvqZFoGRiirNP8EW/9kIKy7AbKHQ3dH8A7dg4tJ06sizYYSqNlkrnZyCSzfpIBgDs8xjlTVxkbYbMix7Zatz54amx9etRmbLs/EwuKolQhGWxFibpoEOO+zExJTClvZBNnWdQ857KcNBQn3ckijX6vpByWB8Ntnzgd6Tkqf+9MsQkvsP5F+CvMnBlb700dY0NdW2tWUPqCpFwyEEYqOcwvG3wNbMRLOU4o45l+zDKAY/adMBIDv0htkAghg/anbghPKN3LemtZEZSIy8vMUbHjWQi8MTU1jx0NrcBjmpZpR93W6JePlHIwKJjdlbm51YW97Hl87JzV4M1IJSZAIY0rtNn5ZB3hv6JsV+7+Hl/IA2JGbpe5LqGjJitCMGoqa8lf7PdpfAN45dT9FuNTiP/rjp9hunlvIvJpkc7kwQgk47W4vau9AbHXB1icmK73SyXFR0HOR5onuTzLrIwb66IfOa0+loIHf+5wrR7mIAhQFLHDdQIYNfDDSLMwAoFys6n7z2hL4DjoWevN8aZIt1QBhnYzw+Xsk/wuw+KcheUAtIVFQRDG0vzJkkEj4UeXKeZ8vDftnJtzWl1zh860G1NuWJ0ltVlz4Xd8z5hYPKtB6qaJs6lb4yw/a2ztgh/Ml1gz5meAFLOBOk2BhmlmffmMqM2cgbYDzzwVa3ZhGlDyL/mcVi/NY9IOCZvT5d3FWq5Em35qiYZJ071XLENiJ2yxSxPA/NcWkoBIRqoEA5caNg92hDvYDgBe3UeY3xWsZgFPAWYD5p8TYw5nS9u5Z0eHTq97cvXo2Tlja9oapftFTqbNOLM9hVwXU5BHxcxsXeTiBBKa+UAJnRHyyJknA8Yym1XdIqhj3gsxckqUw1OA4Q2jAEYwHfietrAC5IsuanuMbX/x7bZL2NFdc9GoWCw7rK8WO3fxhExpuinPmCOROtodGMmxWqEKJqTqXGG2eNvtbbYGXZ15dhZkiUiFyLPuUzCzdBQeIYZt1jZ6PDeAsbax8/m3HC5sXxObD06UC6w8XNu0CV81Ut3jaifABO1ABRHdCbIhqmA6CpMfYG1FPH/9iGV61tUqABFiuU5CXShRVk40zJjPgDA1sOv9S5taGqZgqGj2veu04XjGd+KUWK4SmuQTSR9uA8NtEb9qqsOK87X7W1tH2HoylY92KsAUROMcZO2zY7K6cUKIzh3k/ASogyKO6GciS2YV9x2Q0KRDRaABY9zy0nynGD4xcAbFwE36ouLPTm7gmAVRXoscX/t4/BptcNqL0CpAFTC0fxXNiHMAWZpj7mBMZolcUVx3OxZyfk4SSGDTcpK6O8Ko5VnHfmsZGNC51n0vtiMKzQf6mffChPDeUQnt3tj6vs/bi3t0+vzKh9dagZsByXzWgvXZh+F8r0cZGNSmwJ4DyIozhxzPd8NnsXaztJVAmq28xbu/PtYu07VbaxQwGR1AcIML3qf5j1bQgDHetzhpx8DMCUEevxIQ5faR3RdhgndwqpUvHz5poDIxnrs2cWRsuze+3kj0JYNMbjZz8bP1XDC4YeN9j7HisETrx3inbayXuHtWzndipaImFsteQBQbs46eLWOlmhlbJ5EeKNLYizUXH28Nyf7phR43tp92Y4LU9EYkErl2Du3JvUjdPLCaR3R/kaZypgEjdqQtFu8QrJTMgi23TrdpzUqqEwq5qEu1WCZ3/vS4ekCDL3JkwcdwR+6/tNXXV4CpNx4Z5nBJ0ZJGddF4c3/asFqoKvKDYiMDA8v/3jlsNgUjAE7r8lGmLNLUSOYVbKvgbeflkdHebrrp1PKE0QOQ2rabxW5YVaslGp5fxR1K0bRvy6gDBrRkkv+TJEJ44KvBi3inM58G4m0jRGJgML/U9ewazTE9o/fKBogm1WTsKCam6aYPWDSzobDMiuOWzfwvxRDb7lBkwdWG4d4DMilv84XlXwYGRLPaTjiRbp6sjoY+hwpmh/Z9kMY32L5AtUILYFrq67dDHbEo0Ugmf4GFUadiNNZ5wJjuXkEHG/Mrlq81Bnx3FmMPl3uv+MkqJWpmPGd1zyJPWq/Jz/JPAQ8sUCdPvigp0P6h7emd+fk7j45vBTRgigWQRuydxTu4pnsnGdPL5LPwRAzt13pw4fk0aodY4cVWfTD1KJqVRkGQZ/WaCYqSUf+C8J2ZLCE3rsHSdGsiQjdvREY1IYBGMkLYptKzlY9ojRzsSL4QSB3HKdIyVMvEdqdhs0UXDMqmNe0bkQShvVqNpnAvVI7JKFEjut4pLZgmNbtJA808mFcKYDixWU2n8r5LrHvWOR0t7B4TTXsnJlVxv0iMwKS7fc+Ki6RszRiNK5ab7QInTrtPjll9M/nuZeJ/WARSKKJP9EmiFkzBmhFBbcnjDS7qGS2f2SZjgXxIIYYWTnL+NJ0MseQmv2qsAaY1jQV+0X8ypXEfFEMU7glbNJHj+YKMptaJUgWMqO6UgIjZaaH2kTdYw8UKSR9NaNR++l4jkbq9lrtgN8/h1drWooJpa2s9d25r69y5NuMBKKMokJ1qpcTC1GhqEURNNU8N3X92NN/ECgFP1KmuUDPcEdm8iRUVtzMHtoD/3mXMXxyA2xBZREGbKvTrsurTeVgNhKwbXI//sj/54os9PS++OLm/8Dg9ebS3AD/o6fH5el6c/MuhwwqikW7X1FvkZ1exZk1P+hckeex1EElkD+al5S7dWx95pObNddYMlmD9H342dykTpOT4Ii31QdgejLULMm7lI+fdVYrM6tNRywR0uJhd8dpoF4DNzWbfZ0u7nO87XWmfm9oJSeisnenlLZsmRKIIcmhENM2ea6tv3dtkmvpzbAh40FfablIKRujFfkbv6qwcWjBsvkp9li1LxIH04vmxRlAM+aMqnRkqGPceGPF1t8Xmmvt0urcvZGp0utPOG4eHh3NO12Q3Wlli6p1d25lbhPhZ+rS2ZFbH6IY7yb+22Bd99KstY/GDjZ7NN0Ue+fGAGE7fmmFuvIcyFkdOyVwfY2eCOLKchJscfa7FTDRArtdSDWAPshjIne/2txNJkjDcdxY7Nb+HIT3qjAi/EnFj7Ug1lkef3NMtKyQQHH1ss2Tk3FQTUGVq7luPHrcZGyJPOiXVMmjAaLNJ/iXG7XzZ0eAs23GaBgsgT9OCvsXh3Mwd1hCMYRJzTJIMbJY1sRAyx+dFyXu7RcyaaT6HIFAtnKB54o86srnd1TQMY9Nk+hJC5ilsA2jbO47MHxl/9l/hYDF/rAtGPTsHlOtq6DxLpE/2KkRUNi0sY8ZbbNUSNJiI3FTYcWuFk0vEw2Jjo7cbT4/OZ3poI/9iDTDptM3H5tPWLTe/QQtlbcYt5MyRBmNbS9t2oND4rGsAxFkfS1kBpTlPS8UW1+ZMSCRRp6GQZdV/Pi1QTRf2+VA6JYjBRZX7Uh0Mlp3qTXJVUvC85km8d1oizQ9o0exo65hWAN+j7qpXqJCMJgMrCCa1QYe3HN6mwrClLb6FZpnLnaJAjGGUmmhDJDKJxtY+K+Yn3T/OxEKsBEFU4YRPzCiAuHcCkhhinXPHrHTW9Dounta+wgYEPTCs3cXA9hh/hV26ljRE0pYNiZh2vSc+lp9sV0dKPUM4c71h7WJxE+T3PoJ/Z8KCJBbwdNSMwZlAV0Ex8mDyh9DcoZLpw3pGqQEoKVySwAqvZkc/Qy/gcxlYokQMrZyQMoNXL+YDU0EOxtZ+dD0WDa4VwfR0dwC+62uxILaSs+rmyomMxooNuaBmKhaGaf4uXJ8/eePTUjAvaRP9BNZ6s5OB4V2HEPU7sTuA940JjMzUcJmo4+cpTwInF11bWwMkAEoFw7KtshDsiGY+vJ6B6J0eZ4hd7rVmx2Cw4eEdomD6siSaiYxPTU2NR+j286qSwXUTw+Z5WPi5H2ExjkbLXkzUkpE8Da0GxnIbX0bk8HQmswYDxu+/0koGT5KRgmtrmVymTxAFhSgz1WtodA4w044pg8YZbTSTvx40l62ZxjIwSqNp+obzRsOsNOqc7B6mt8T8COGE6ZpGgAcTijlQORaTBTzfKCyjhyqYP5oHJySaCUqwonIxggdm1OjVoL5msxmPqBIFuY+VAJoiEfVQAIgDJsLl1qwcjEQ63sdeLd9h7Medr7BWzDTtHhHJdE33T19GxHCY4KCB0UXh6zRfGBmA4YQg7r2Au0mxsCAqXLZWpoe3LPgxmxSNkeDozq8ezn98vPMMKHN+w1Zxm201MBwXUHMXtotc1sfSeuqpHcrVWnE764MMjobY8hbDUYGTZlVvy9SMk4DEoquDJRMLgjPOVsk5s/70pTHQCFEenbh1RDc1tLUyXkalM7VePHwxbwDKwQDj2FX5h+/8tpve+PorUTx3RhFM6zVkw7uwPSwUVs9BI0H4Tp6l1ckCGDEWZPURIuEZQtXA0Nm07I/JdA1uNEXutTJe1oKg7uL6Gf/CVNwjXQ0MujK16ZB3bmBhmXd8lnbN4D5wRWrcqaEXCEboCxO1ExPPMZBG3PmkDgVDGBjs0s5hK9lM1cnBTRqMmAq3muoiH2/hyVNbeze3QDQfo1w6K/ZplppmCkYUgitqCOZ+j7YYHrogLjjAAwcgfKuKhuet7djLmD9TT4yiZJAYu9PWtENVsxjb84anHAUFCG2r8TzEotrvdnT7kYetxtbfHE+Mg4zOfRI5zimi2mpSWzKKUkgnWz8DNfB+ZaN1b0xQgS/e9elbaDQAeGgdOxUTS75R8BAjXrfL6cKNAI6eMUkRwzGRnuKEdkIQaFuRno4ZLKu96vlUpJMWliIfPLuGxaapLWPrvfn7I2LlGRqVYOh+dXW/H+++4bTwC3+y0IY42mBAhMBuFT1nFlwIxjokPFqZHqwl9M3NOW14N59ttZtIojAakyBoldnZWQGnPhjevdCXPwlFHGP5i6kh6mrGf2Pc2ms1bkilxWMEU18pGfw/lt+obbucTodvU0rgY6dQwgiu6u0Tw+u2RM/4jOXC0XAGsciNt51eC7uVxd2zPqbIgXCG/RZv1ZHWnxfvZrRwcKA4puljxHPb2upbjMa9kj32VcFgkYrLqZsSDEtrOWGazrtlz0Q/700UcWdlZdKZxz5T4MuCKAb6RqJggmXl9grrtWC23mDp2ekGBxQdCYfoQcBC5T4ctgFivZmQfDJV6lbBqDTzHrXP9xsrwVQaAAZIHDu0YRvt4mhfUM4w0UMkIOFZjkDgul18Rc4ZO6L8AmX/uD1GlJXuw0LZorhRY7BXkOiBYMASKpskqRl35A9To/xbQDUrpP3qIreeIZo1WRsbEdJZFQxcstj9o0Ony7meGZGmqXXhF6ZHRwIcTVPLnYuGSlXjDdP0OCZCGgUuMHKos6kEqwxzo7QpHq2DzurjLZPdhbPcBK4vKHUe5/OXKsmcmL/z+qNPr4bIqcDgjPQdsoOlbDf6utm2mSUn73bF8PWCIndulMc3OK5JP+5bxtPCw4e+ApHRvsJAd4PlOtA4cIc6WNybaJLzYwzfeRJS7kQi4+xgowKmJkwAavk+VbMfKDpYiCL4F1S+z7udo6v0W2ea7jWgffScSDKTFrWKohnJuoIb5DuyKzYdC1GgnLzvcEQQcG9hxWu8Vzvzp7LjaT1fRiJPRo8+/x1cn+9c+6RInSMPSg5cpGDq/7ZRV8tIYDuvAuC+XnXTDQc0nzk5xqZNJL0LXkOJy8HwIwZGObDmUrem6No83uJbygWI6HeVGxHeuz9KCpt2iCICV24af7e1Df/A1Xo/n2VuejhWenRnoAXAVBwKqF6azQfgYrDLxLdDN5y4c8zMKBJpnrGWhyOWJQhUguHdSR9fuabUu2EVHkydf6FiRTn2/ILmLFeifIHnTk7cLebch/JyGSvddcW9gmC+U75LNn9JzZvuAuF1wSRObtCtu2pvItpvsT224Mu/Jq9oC0DipMbemSVHWdGQV7fQTmb9eOIcvX0x44Oi389S7pgfpSDSBBNE/GC+2p7dvw9/bdEdGuNvjEmlWJSXEMzLFccwqrMCj1spyMY5bTU8zdDZxu3A7DMicPtiaNvKlyxx6rvBGbWHsgu2Ui2kWF0zfQowOMm/WTTbFI8hvRstHguNeU8YAUtjRO4at65NTE1tthnb5lFUX4TKO3sDPwAwxpaKuFn9NQyoedfB5vYfQ4HcXDbGdvhOTl+d7RTzmwgD0U1Hic/hLatYCQAjEshuFpCqo4YBB+gnV/QuFCvnTGArYWxFY2wMFWM0w+VzMnW39qaw1Hx839h2qynyIFZ2rjBHP0oDwfxdJTlTJaeQQMzps7itn93u9it9YXbsucFmtXido/S56C1EU8ypOYeKvuJ8IwTOQHkD0Q1X0YYZHJth7C8msjJqNWjMIFpK/AhDzaPl2alIRg49YJZ4glmxqcfGtsX59RAncGU2GIwZgKk3VpzXWLxgpgJ9s6/OObze9OLsyOw+HZgNxeWYlQmLJyGaNmVchnypm+nM3J/wvCpkz6GM08JWi/vGV4qAqTlpbNGdz3OyrenpDZOgOXhMUYSxh3VNH53f+Pz1wgktSJgfQ0TzFf281vKzPTpepmBe7uD0ToLL48Fd7vRyH361gWlmi40GbGm/5gNg5c61tEWjbPDqG6P0hDmJdLicc+hfnZ85DhpxffcO5i2dulgcG2NicW8ZghIVbC79T4yU7z5UT2kEaoZlAOPZX4cIV5rsA/iwZCiYV5SKA32Kr1O2fYWnpr+PCWdLmp2BsCYV8/mcJHYfWd2a/f/YUHQ1HAw04h4Dt9PpWnXzlgNTMLo9l99bz25qcWyOgd6VgBEC6+BPIv9JjfG5zfG8aObpZsBfN5eZLPhX4If1KJn6lh/qHS6Tv8TmYlUWwmcbbkdjx4a5ijpOU5ik++hFt5awgQxdmzPZrNXrdftsXq/XsbDrtGmziCDAns1eRRJKTqIiJPQET2ZCydDS0l3VUza9vtXW0tL26+ayVnjCKR3fMaIBqDd+J1gdC1Dbvv2ibfV9ZrNYrGwguL9WUE+xoSUMgLM76TUUCQ5VTkcadwLjtuBJm7c0Hwqk/OZIJ203LBzyAtPSGHsQoXnYi9gXUQ94nqnp8jubHzx9+nQ3G45GS9Ws8aWXUTIA/OWXqn4sBx1m36QGTcNS2qUa09vZbKzPJOSnFTcLcr0z+w6LRo1USPm1rpoudTase70mWbt7AsMC0f/FhEoo75xTPxLEuMVOBx8Hujk+Pj41cUzbc4uaYfphvQrG+MNALTAiCU8WCpnW2HRsRVWmD20O2+TeiFLQEQE/Q92fPUhrmxXUaKYsRw2rfn+3z4QnyWujEk5oHHlQIJNTxcaIp9rDwMDhhAUNGKK88p16owrmO6+UQyiRjED6VphF8y70CqGRrI2Vo96l7f3W0aJRo4aIaw7vOln7Fa9SGA0w1YDZFrLRgKgmndilgEEmY+tTkeKw72EYdm7ryFjf9kGkYKLB7eSIdkMsuH/EwsDU/8BUXTR03YRmnGmbde7G4Qc3r94+zz7/xPB9Nkhb8ZwxRqtEwRTKrqQtGgdv0CICSrMbbi79CENqxeXOzMPSXP/UJ/euffL6fdzFfNxUlEuuxP4SpeNvjHkw4Ddrf/4PoAkEOqJrLrfFYoFI+lW2FZiVkXj+/Yp3Y3AWvaqKRxPF0K++1VwQ49WSjwaQgIS3jz4YLzuQDbuxx3dacNXM56FEHvWVHJAGQvoBK6czybS8xBF9hqa+HHnajnriAW+wfp8q2nt83qyVnhtEeznQWfRtOL1FLsPsl2ujl1NEtYe8+IRGOZiZj5QfLoc2DYuyWPK7FWFQ5mMo04JbQGXreJktrP8P6RaZIOQUftgAAAAASUVORK5CYII=" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4>SMP Negeri 4 Kuningan</h4>
                              <p class="text-secondary mb-1">Jl. RE Martadinata</p>
                              <button class="btn btn-primary">Follow</button>
                              <button class="btn btn-outline-primary">Message</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <div class="col-md-12">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Nama Sekolah</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              SMP Negeri 4 Kuningan
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              Sempat@example.com
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Telephone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                             +62 87868397
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Akreditasi</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              A
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              Jl RE Martadinata
                            </div>
                          </div>
                          <hr>
                          
                        </div>
                      </div>
        
                      
        
        
        
                    </div>
                  </div>
        
                </div>
            </div>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; SMP Negeri 4Kuningan|KiwwRogerr</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('front')}}/js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
