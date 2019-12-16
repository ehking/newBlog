<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="../Style/dist/css/custom-style.css">
</head>
<body>
<style>
    body {
        height: 100vh;
        background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
        overflow: hidden;
        filter: drop-shadow(0 0 10px white);
    }

    .snow {
        position: absolute;
        width: 10px;
        height: 10px;
        background: white;
        border-radius: 50%;
    }
    .snow:nth-child(1) {
        opacity: 0.9231;
        transform: translate(50.1944vw, -10px) scale(0.8275);
        animation: fall-1 28s -19s linear infinite;
    }
    @keyframes fall-1 {
        61.93% {
            transform: translate(59.2687vw, 61.93vh) scale(0.8275);
        }
        to {
            transform: translate(54.73155vw, 100vh) scale(0.8275);
        }
    }
    .snow:nth-child(2) {
        opacity: 0.4514;
        transform: translate(72.1033vw, -10px) scale(0.7481);
        animation: fall-2 20s -8s linear infinite;
    }
    @keyframes fall-2 {
        54.16% {
            transform: translate(76.5918vw, 54.16vh) scale(0.7481);
        }
        to {
            transform: translate(74.34755vw, 100vh) scale(0.7481);
        }
    }
    .snow:nth-child(3) {
        opacity: 0.017;
        transform: translate(82.6943vw, -10px) scale(0.9057);
        animation: fall-3 20s -12s linear infinite;
    }
    @keyframes fall-3 {
        55.088% {
            transform: translate(73.5094vw, 55.088vh) scale(0.9057);
        }
        to {
            transform: translate(78.10185vw, 100vh) scale(0.9057);
        }
    }
    .snow:nth-child(4) {
        opacity: 0.0971;
        transform: translate(42.5534vw, -10px) scale(0.548);
        animation: fall-4 20s -1s linear infinite;
    }
    @keyframes fall-4 {
        45.742% {
            transform: translate(41.0532vw, 45.742vh) scale(0.548);
        }
        to {
            transform: translate(41.8033vw, 100vh) scale(0.548);
        }
    }
    .snow:nth-child(5) {
        opacity: 0.5626;
        transform: translate(15.1335vw, -10px) scale(0.7086);
        animation: fall-5 17s -4s linear infinite;
    }
    @keyframes fall-5 {
        72.835% {
            transform: translate(12.9273vw, 72.835vh) scale(0.7086);
        }
        to {
            transform: translate(14.0304vw, 100vh) scale(0.7086);
        }
    }
    .snow:nth-child(6) {
        opacity: 0.8656;
        transform: translate(65.7453vw, -10px) scale(0.3538);
        animation: fall-6 29s -12s linear infinite;
    }
    @keyframes fall-6 {
        75.097% {
            transform: translate(74.4468vw, 75.097vh) scale(0.3538);
        }
        to {
            transform: translate(70.09605vw, 100vh) scale(0.3538);
        }
    }
    .snow:nth-child(7) {
        opacity: 0.3399;
        transform: translate(63.5301vw, -10px) scale(0.9987);
        animation: fall-7 21s -11s linear infinite;
    }
    @keyframes fall-7 {
        64.856% {
            transform: translate(68.3083vw, 64.856vh) scale(0.9987);
        }
        to {
            transform: translate(65.9192vw, 100vh) scale(0.9987);
        }
    }
    .snow:nth-child(8) {
        opacity: 0.9093;
        transform: translate(61.2878vw, -10px) scale(0.9098);
        animation: fall-8 26s -12s linear infinite;
    }
    @keyframes fall-8 {
        53.44% {
            transform: translate(55.2355vw, 53.44vh) scale(0.9098);
        }
        to {
            transform: translate(58.26165vw, 100vh) scale(0.9098);
        }
    }
    .snow:nth-child(9) {
        opacity: 0.618;
        transform: translate(52.9151vw, -10px) scale(0.2385);
        animation: fall-9 19s -22s linear infinite;
    }
    @keyframes fall-9 {
        61.344% {
            transform: translate(58.9917vw, 61.344vh) scale(0.2385);
        }
        to {
            transform: translate(55.9534vw, 100vh) scale(0.2385);
        }
    }
    .snow:nth-child(10) {
        opacity: 0.8168;
        transform: translate(23.815vw, -10px) scale(0.2733);
        animation: fall-10 29s -5s linear infinite;
    }
    @keyframes fall-10 {
        35.614% {
            transform: translate(22.895vw, 35.614vh) scale(0.2733);
        }
        to {
            transform: translate(23.355vw, 100vh) scale(0.2733);
        }
    }
    .snow:nth-child(11) {
        opacity: 0.5755;
        transform: translate(30.171vw, -10px) scale(0.8427);
        animation: fall-11 10s -7s linear infinite;
    }
    @keyframes fall-11 {
        76.901% {
            transform: translate(29.9596vw, 76.901vh) scale(0.8427);
        }
        to {
            transform: translate(30.0653vw, 100vh) scale(0.8427);
        }
    }
    .snow:nth-child(12) {
        opacity: 0.176;
        transform: translate(59.6226vw, -10px) scale(0.4254);
        animation: fall-12 11s -10s linear infinite;
    }
    @keyframes fall-12 {
        62.05% {
            transform: translate(69.4773vw, 62.05vh) scale(0.4254);
        }
        to {
            transform: translate(64.54995vw, 100vh) scale(0.4254);
        }
    }
    .snow:nth-child(13) {
        opacity: 0.6779;
        transform: translate(59.8664vw, -10px) scale(0.0641);
        animation: fall-13 24s -28s linear infinite;
    }
    @keyframes fall-13 {
        58.363% {
            transform: translate(56.7198vw, 58.363vh) scale(0.0641);
        }
        to {
            transform: translate(58.2931vw, 100vh) scale(0.0641);
        }
    }
    .snow:nth-child(14) {
        opacity: 0.6563;
        transform: translate(64.1466vw, -10px) scale(0.3914);
        animation: fall-14 25s -24s linear infinite;
    }
    @keyframes fall-14 {
        50.789% {
            transform: translate(72.0184vw, 50.789vh) scale(0.3914);
        }
        to {
            transform: translate(68.0825vw, 100vh) scale(0.3914);
        }
    }
    .snow:nth-child(15) {
        opacity: 0.3382;
        transform: translate(90.4161vw, -10px) scale(0.0693);
        animation: fall-15 24s -28s linear infinite;
    }
    @keyframes fall-15 {
        55.752% {
            transform: translate(100.4024vw, 55.752vh) scale(0.0693);
        }
        to {
            transform: translate(95.40925vw, 100vh) scale(0.0693);
        }
    }
    .snow:nth-child(16) {
        opacity: 0.9354;
        transform: translate(0.3805vw, -10px) scale(0.4657);
        animation: fall-16 17s -22s linear infinite;
    }
    @keyframes fall-16 {
        57.078% {
            transform: translate(-5.0026vw, 57.078vh) scale(0.4657);
        }
        to {
            transform: translate(-2.31105vw, 100vh) scale(0.4657);
        }
    }
    .snow:nth-child(17) {
        opacity: 0.0405;
        transform: translate(3.2068vw, -10px) scale(0.7645);
        animation: fall-17 18s -6s linear infinite;
    }
    @keyframes fall-17 {
        36.296% {
            transform: translate(12.4075vw, 36.296vh) scale(0.7645);
        }
        to {
            transform: translate(7.80715vw, 100vh) scale(0.7645);
        }
    }
    .snow:nth-child(18) {
        opacity: 0.3363;
        transform: translate(41.142vw, -10px) scale(0.4606);
        animation: fall-18 21s -20s linear infinite;
    }
    @keyframes fall-18 {
        42.495% {
            transform: translate(36.7397vw, 42.495vh) scale(0.4606);
        }
        to {
            transform: translate(38.94085vw, 100vh) scale(0.4606);
        }
    }
    .snow:nth-child(19) {
        opacity: 0.6704;
        transform: translate(76.3659vw, -10px) scale(0.201);
        animation: fall-19 28s -20s linear infinite;
    }
    @keyframes fall-19 {
        59.368% {
            transform: translate(83.6785vw, 59.368vh) scale(0.201);
        }
        to {
            transform: translate(80.0222vw, 100vh) scale(0.201);
        }
    }
    .snow:nth-child(20) {
        opacity: 0.831;
        transform: translate(62.7197vw, -10px) scale(0.5881);
        animation: fall-20 26s -5s linear infinite;
    }
    @keyframes fall-20 {
        63.577% {
            transform: translate(68.0598vw, 63.577vh) scale(0.5881);
        }
        to {
            transform: translate(65.38975vw, 100vh) scale(0.5881);
        }
    }
    .snow:nth-child(21) {
        opacity: 0.4414;
        transform: translate(63.6027vw, -10px) scale(0.5315);
        animation: fall-21 12s -25s linear infinite;
    }
    @keyframes fall-21 {
        44.927% {
            transform: translate(62.5004vw, 44.927vh) scale(0.5315);
        }
        to {
            transform: translate(63.05155vw, 100vh) scale(0.5315);
        }
    }
    .snow:nth-child(22) {
        opacity: 0.836;
        transform: translate(63.3458vw, -10px) scale(0.2853);
        animation: fall-22 18s -16s linear infinite;
    }
    @keyframes fall-22 {
        34.641% {
            transform: translate(58.6295vw, 34.641vh) scale(0.2853);
        }
        to {
            transform: translate(60.98765vw, 100vh) scale(0.2853);
        }
    }
    .snow:nth-child(23) {
        opacity: 0.911;
        transform: translate(44.9817vw, -10px) scale(0.1531);
        animation: fall-23 12s -23s linear infinite;
    }
    @keyframes fall-23 {
        71.042% {
            transform: translate(50.0867vw, 71.042vh) scale(0.1531);
        }
        to {
            transform: translate(47.5342vw, 100vh) scale(0.1531);
        }
    }
    .snow:nth-child(24) {
        opacity: 0.7974;
        transform: translate(58.2551vw, -10px) scale(0.0896);
        animation: fall-24 21s -13s linear infinite;
    }
    @keyframes fall-24 {
        74.608% {
            transform: translate(58.8473vw, 74.608vh) scale(0.0896);
        }
        to {
            transform: translate(58.5512vw, 100vh) scale(0.0896);
        }
    }
    .snow:nth-child(25) {
        opacity: 0.6441;
        transform: translate(36.1319vw, -10px) scale(0.6835);
        animation: fall-25 30s -26s linear infinite;
    }
    @keyframes fall-25 {
        62.974% {
            transform: translate(32.6974vw, 62.974vh) scale(0.6835);
        }
        to {
            transform: translate(34.41465vw, 100vh) scale(0.6835);
        }
    }
    .snow:nth-child(26) {
        opacity: 0.7839;
        transform: translate(50.5473vw, -10px) scale(1);
        animation: fall-26 29s -12s linear infinite;
    }
    @keyframes fall-26 {
        64.831% {
            transform: translate(46.2186vw, 64.831vh) scale(1);
        }
        to {
            transform: translate(48.38295vw, 100vh) scale(1);
        }
    }
    .snow:nth-child(27) {
        opacity: 0.0934;
        transform: translate(54.6509vw, -10px) scale(0.3955);
        animation: fall-27 26s -2s linear infinite;
    }
    @keyframes fall-27 {
        66.839% {
            transform: translate(46.6782vw, 66.839vh) scale(0.3955);
        }
        to {
            transform: translate(50.66455vw, 100vh) scale(0.3955);
        }
    }
    .snow:nth-child(28) {
        opacity: 0.7466;
        transform: translate(17.0491vw, -10px) scale(0.2923);
        animation: fall-28 11s -4s linear infinite;
    }
    @keyframes fall-28 {
        71.709% {
            transform: translate(13.1193vw, 71.709vh) scale(0.2923);
        }
        to {
            transform: translate(15.0842vw, 100vh) scale(0.2923);
        }
    }
    .snow:nth-child(29) {
        opacity: 0.42;
        transform: translate(89.2889vw, -10px) scale(0.145);
        animation: fall-29 15s -7s linear infinite;
    }
    @keyframes fall-29 {
        72.282% {
            transform: translate(96.4647vw, 72.282vh) scale(0.145);
        }
        to {
            transform: translate(92.8768vw, 100vh) scale(0.145);
        }
    }
    .snow:nth-child(30) {
        opacity: 0.4727;
        transform: translate(30.5656vw, -10px) scale(0.1255);
        animation: fall-30 10s -14s linear infinite;
    }
    @keyframes fall-30 {
        78.934% {
            transform: translate(39.3864vw, 78.934vh) scale(0.1255);
        }
        to {
            transform: translate(34.976vw, 100vh) scale(0.1255);
        }
    }
    .snow:nth-child(31) {
        opacity: 0.5034;
        transform: translate(22.6441vw, -10px) scale(0.3293);
        animation: fall-31 30s -24s linear infinite;
    }
    @keyframes fall-31 {
        57.743% {
            transform: translate(18.2373vw, 57.743vh) scale(0.3293);
        }
        to {
            transform: translate(20.4407vw, 100vh) scale(0.3293);
        }
    }
    .snow:nth-child(32) {
        opacity: 0.5828;
        transform: translate(47.7218vw, -10px) scale(0.4478);
        animation: fall-32 30s -28s linear infinite;
    }
    @keyframes fall-32 {
        73.449% {
            transform: translate(56.2634vw, 73.449vh) scale(0.4478);
        }
        to {
            transform: translate(51.9926vw, 100vh) scale(0.4478);
        }
    }
    .snow:nth-child(33) {
        opacity: 0.2221;
        transform: translate(38.2364vw, -10px) scale(0.9114);
        animation: fall-33 23s -8s linear infinite;
    }
    @keyframes fall-33 {
        49.162% {
            transform: translate(30.4638vw, 49.162vh) scale(0.9114);
        }
        to {
            transform: translate(34.3501vw, 100vh) scale(0.9114);
        }
    }
    .snow:nth-child(34) {
        opacity: 0.4058;
        transform: translate(25.6166vw, -10px) scale(0.045);
        animation: fall-34 17s -5s linear infinite;
    }
    @keyframes fall-34 {
        79.889% {
            transform: translate(35.4676vw, 79.889vh) scale(0.045);
        }
        to {
            transform: translate(30.5421vw, 100vh) scale(0.045);
        }
    }
    .snow:nth-child(35) {
        opacity: 0.8948;
        transform: translate(2.9575vw, -10px) scale(0.7196);
        animation: fall-35 26s -25s linear infinite;
    }
    @keyframes fall-35 {
        46.537% {
            transform: translate(5.5881vw, 46.537vh) scale(0.7196);
        }
        to {
            transform: translate(4.2728vw, 100vh) scale(0.7196);
        }
    }
    .snow:nth-child(36) {
        opacity: 0.0473;
        transform: translate(25.3621vw, -10px) scale(0.388);
        animation: fall-36 23s -22s linear infinite;
    }
    @keyframes fall-36 {
        76.882% {
            transform: translate(32.2845vw, 76.882vh) scale(0.388);
        }
        to {
            transform: translate(28.8233vw, 100vh) scale(0.388);
        }
    }
    .snow:nth-child(37) {
        opacity: 0.0483;
        transform: translate(19.4559vw, -10px) scale(0.9964);
        animation: fall-37 22s -5s linear infinite;
    }
    @keyframes fall-37 {
        52.691% {
            transform: translate(28.5176vw, 52.691vh) scale(0.9964);
        }
        to {
            transform: translate(23.98675vw, 100vh) scale(0.9964);
        }
    }
    .snow:nth-child(38) {
        opacity: 0.0594;
        transform: translate(30.6357vw, -10px) scale(0.6781);
        animation: fall-38 14s -24s linear infinite;
    }
    @keyframes fall-38 {
        72.691% {
            transform: translate(20.9452vw, 72.691vh) scale(0.6781);
        }
        to {
            transform: translate(25.79045vw, 100vh) scale(0.6781);
        }
    }
    .snow:nth-child(39) {
        opacity: 0.1461;
        transform: translate(83.4339vw, -10px) scale(0.3737);
        animation: fall-39 29s -10s linear infinite;
    }
    @keyframes fall-39 {
        75.616% {
            transform: translate(79.0116vw, 75.616vh) scale(0.3737);
        }
        to {
            transform: translate(81.22275vw, 100vh) scale(0.3737);
        }
    }
    .snow:nth-child(40) {
        opacity: 0.5403;
        transform: translate(36.6057vw, -10px) scale(0.5997);
        animation: fall-40 14s -8s linear infinite;
    }
    @keyframes fall-40 {
        79.944% {
            transform: translate(37.5905vw, 79.944vh) scale(0.5997);
        }
        to {
            transform: translate(37.0981vw, 100vh) scale(0.5997);
        }
    }
    .snow:nth-child(41) {
        opacity: 0.0014;
        transform: translate(70.8357vw, -10px) scale(0.1084);
        animation: fall-41 30s -28s linear infinite;
    }
    @keyframes fall-41 {
        38.409% {
            transform: translate(74.6572vw, 38.409vh) scale(0.1084);
        }
        to {
            transform: translate(72.74645vw, 100vh) scale(0.1084);
        }
    }
    .snow:nth-child(42) {
        opacity: 0.9568;
        transform: translate(74.9531vw, -10px) scale(0.668);
        animation: fall-42 29s -18s linear infinite;
    }
    @keyframes fall-42 {
        64.398% {
            transform: translate(74.9198vw, 64.398vh) scale(0.668);
        }
        to {
            transform: translate(74.93645vw, 100vh) scale(0.668);
        }
    }
    .snow:nth-child(43) {
        opacity: 0.7656;
        transform: translate(87.7096vw, -10px) scale(0.3128);
        animation: fall-43 14s -30s linear infinite;
    }
    @keyframes fall-43 {
        53.952% {
            transform: translate(95.0566vw, 53.952vh) scale(0.3128);
        }
        to {
            transform: translate(91.3831vw, 100vh) scale(0.3128);
        }
    }
    .snow:nth-child(44) {
        opacity: 0.9511;
        transform: translate(52.9985vw, -10px) scale(0.3167);
        animation: fall-44 26s -24s linear infinite;
    }
    @keyframes fall-44 {
        37.116% {
            transform: translate(56.8438vw, 37.116vh) scale(0.3167);
        }
        to {
            transform: translate(54.92115vw, 100vh) scale(0.3167);
        }
    }
    .snow:nth-child(45) {
        opacity: 0.9142;
        transform: translate(86.0507vw, -10px) scale(0.7996);
        animation: fall-45 26s -7s linear infinite;
    }
    @keyframes fall-45 {
        63.791% {
            transform: translate(87.1023vw, 63.791vh) scale(0.7996);
        }
        to {
            transform: translate(86.5765vw, 100vh) scale(0.7996);
        }
    }
    .snow:nth-child(46) {
        opacity: 0.1755;
        transform: translate(63.5217vw, -10px) scale(0.6379);
        animation: fall-46 15s -28s linear infinite;
    }
    @keyframes fall-46 {
        46.767% {
            transform: translate(71.3862vw, 46.767vh) scale(0.6379);
        }
        to {
            transform: translate(67.45395vw, 100vh) scale(0.6379);
        }
    }
    .snow:nth-child(47) {
        opacity: 0.5431;
        transform: translate(53.0137vw, -10px) scale(0.8725);
        animation: fall-47 17s -16s linear infinite;
    }
    @keyframes fall-47 {
        39.706% {
            transform: translate(45.0182vw, 39.706vh) scale(0.8725);
        }
        to {
            transform: translate(49.01595vw, 100vh) scale(0.8725);
        }
    }
    .snow:nth-child(48) {
        opacity: 0.6266;
        transform: translate(0.1562vw, -10px) scale(0.3696);
        animation: fall-48 21s -13s linear infinite;
    }
    @keyframes fall-48 {
        46.584% {
            transform: translate(1.8003vw, 46.584vh) scale(0.3696);
        }
        to {
            transform: translate(0.97825vw, 100vh) scale(0.3696);
        }
    }
    .snow:nth-child(49) {
        opacity: 0.866;
        transform: translate(77.1467vw, -10px) scale(0.6843);
        animation: fall-49 25s -5s linear infinite;
    }
    @keyframes fall-49 {
        49.669% {
            transform: translate(68.5441vw, 49.669vh) scale(0.6843);
        }
        to {
            transform: translate(72.8454vw, 100vh) scale(0.6843);
        }
    }
    .snow:nth-child(50) {
        opacity: 0.8783;
        transform: translate(98.7486vw, -10px) scale(0.767);
        animation: fall-50 21s -27s linear infinite;
    }
    @keyframes fall-50 {
        79.649% {
            transform: translate(90.6526vw, 79.649vh) scale(0.767);
        }
        to {
            transform: translate(94.7006vw, 100vh) scale(0.767);
        }
    }
    .snow:nth-child(51) {
        opacity: 0.1668;
        transform: translate(60.2139vw, -10px) scale(0.1386);
        animation: fall-51 22s -29s linear infinite;
    }
    @keyframes fall-51 {
        39.625% {
            transform: translate(66.4989vw, 39.625vh) scale(0.1386);
        }
        to {
            transform: translate(63.3564vw, 100vh) scale(0.1386);
        }
    }
    .snow:nth-child(52) {
        opacity: 0.4248;
        transform: translate(67.3485vw, -10px) scale(0.5642);
        animation: fall-52 28s -18s linear infinite;
    }
    @keyframes fall-52 {
        53.58% {
            transform: translate(60.9855vw, 53.58vh) scale(0.5642);
        }
        to {
            transform: translate(64.167vw, 100vh) scale(0.5642);
        }
    }
    .snow:nth-child(53) {
        opacity: 0.4158;
        transform: translate(29.2018vw, -10px) scale(0.9226);
        animation: fall-53 18s -24s linear infinite;
    }
    @keyframes fall-53 {
        53.85% {
            transform: translate(19.3501vw, 53.85vh) scale(0.9226);
        }
        to {
            transform: translate(24.27595vw, 100vh) scale(0.9226);
        }
    }
    .snow:nth-child(54) {
        opacity: 0.3219;
        transform: translate(36.1937vw, -10px) scale(0.8549);
        animation: fall-54 26s -6s linear infinite;
    }
    @keyframes fall-54 {
        61.373% {
            transform: translate(34.0721vw, 61.373vh) scale(0.8549);
        }
        to {
            transform: translate(35.1329vw, 100vh) scale(0.8549);
        }
    }
    .snow:nth-child(55) {
        opacity: 0.9534;
        transform: translate(65.8364vw, -10px) scale(0.8162);
        animation: fall-55 23s -21s linear infinite;
    }
    @keyframes fall-55 {
        64.964% {
            transform: translate(57.2498vw, 64.964vh) scale(0.8162);
        }
        to {
            transform: translate(61.5431vw, 100vh) scale(0.8162);
        }
    }
    .snow:nth-child(56) {
        opacity: 0.0667;
        transform: translate(82.0048vw, -10px) scale(0.4304);
        animation: fall-56 18s -20s linear infinite;
    }
    @keyframes fall-56 {
        54.443% {
            transform: translate(74.8417vw, 54.443vh) scale(0.4304);
        }
        to {
            transform: translate(78.42325vw, 100vh) scale(0.4304);
        }
    }
    .snow:nth-child(57) {
        opacity: 0.3911;
        transform: translate(69.6032vw, -10px) scale(0.4118);
        animation: fall-57 30s -7s linear infinite;
    }
    @keyframes fall-57 {
        61.664% {
            transform: translate(61.9183vw, 61.664vh) scale(0.4118);
        }
        to {
            transform: translate(65.76075vw, 100vh) scale(0.4118);
        }
    }
    .snow:nth-child(58) {
        opacity: 0.146;
        transform: translate(76.6424vw, -10px) scale(0.3179);
        animation: fall-58 11s -20s linear infinite;
    }
    @keyframes fall-58 {
        65.164% {
            transform: translate(81.2033vw, 65.164vh) scale(0.3179);
        }
        to {
            transform: translate(78.92285vw, 100vh) scale(0.3179);
        }
    }
    .snow:nth-child(59) {
        opacity: 0.4845;
        transform: translate(20.097vw, -10px) scale(0.6761);
        animation: fall-59 13s -12s linear infinite;
    }
    @keyframes fall-59 {
        31.518% {
            transform: translate(24.0189vw, 31.518vh) scale(0.6761);
        }
        to {
            transform: translate(22.05795vw, 100vh) scale(0.6761);
        }
    }
    .snow:nth-child(60) {
        opacity: 0.037;
        transform: translate(14.2619vw, -10px) scale(0.2098);
        animation: fall-60 20s -19s linear infinite;
    }
    @keyframes fall-60 {
        38.859% {
            transform: translate(9.2406vw, 38.859vh) scale(0.2098);
        }
        to {
            transform: translate(11.75125vw, 100vh) scale(0.2098);
        }
    }
    .snow:nth-child(61) {
        opacity: 0.1212;
        transform: translate(25.6603vw, -10px) scale(0.6558);
        animation: fall-61 22s -1s linear infinite;
    }
    @keyframes fall-61 {
        39.484% {
            transform: translate(34.6034vw, 39.484vh) scale(0.6558);
        }
        to {
            transform: translate(30.13185vw, 100vh) scale(0.6558);
        }
    }
    .snow:nth-child(62) {
        opacity: 0.2897;
        transform: translate(95.5896vw, -10px) scale(0.3259);
        animation: fall-62 13s -14s linear infinite;
    }
    @keyframes fall-62 {
        57.087% {
            transform: translate(101.2024vw, 57.087vh) scale(0.3259);
        }
        to {
            transform: translate(98.396vw, 100vh) scale(0.3259);
        }
    }
    .snow:nth-child(63) {
        opacity: 0.0673;
        transform: translate(49.6094vw, -10px) scale(0.0576);
        animation: fall-63 22s -5s linear infinite;
    }
    @keyframes fall-63 {
        57.633% {
            transform: translate(42.5946vw, 57.633vh) scale(0.0576);
        }
        to {
            transform: translate(46.102vw, 100vh) scale(0.0576);
        }
    }
    .snow:nth-child(64) {
        opacity: 0.9987;
        transform: translate(66.9591vw, -10px) scale(0.1265);
        animation: fall-64 20s -30s linear infinite;
    }
    @keyframes fall-64 {
        73.841% {
            transform: translate(63.3024vw, 73.841vh) scale(0.1265);
        }
        to {
            transform: translate(65.13075vw, 100vh) scale(0.1265);
        }
    }
    .snow:nth-child(65) {
        opacity: 0.9259;
        transform: translate(55.0277vw, -10px) scale(0.3151);
        animation: fall-65 24s -11s linear infinite;
    }
    @keyframes fall-65 {
        39.311% {
            transform: translate(46.6061vw, 39.311vh) scale(0.3151);
        }
        to {
            transform: translate(50.8169vw, 100vh) scale(0.3151);
        }
    }
    .snow:nth-child(66) {
        opacity: 0.0972;
        transform: translate(50.5252vw, -10px) scale(0.2935);
        animation: fall-66 27s -23s linear infinite;
    }
    @keyframes fall-66 {
        47.699% {
            transform: translate(45.3671vw, 47.699vh) scale(0.2935);
        }
        to {
            transform: translate(47.94615vw, 100vh) scale(0.2935);
        }
    }
    .snow:nth-child(67) {
        opacity: 0.7284;
        transform: translate(48.1276vw, -10px) scale(0.8409);
        animation: fall-67 29s -27s linear infinite;
    }
    @keyframes fall-67 {
        31.908% {
            transform: translate(55.5328vw, 31.908vh) scale(0.8409);
        }
        to {
            transform: translate(51.8302vw, 100vh) scale(0.8409);
        }
    }
    .snow:nth-child(68) {
        opacity: 0.5477;
        transform: translate(53.7898vw, -10px) scale(0.3278);
        animation: fall-68 20s -21s linear infinite;
    }
    @keyframes fall-68 {
        32.936% {
            transform: translate(55.3289vw, 32.936vh) scale(0.3278);
        }
        to {
            transform: translate(54.55935vw, 100vh) scale(0.3278);
        }
    }
    .snow:nth-child(69) {
        opacity: 0.3313;
        transform: translate(21.1654vw, -10px) scale(0.8996);
        animation: fall-69 14s -22s linear infinite;
    }
    @keyframes fall-69 {
        63.329% {
            transform: translate(22.9124vw, 63.329vh) scale(0.8996);
        }
        to {
            transform: translate(22.0389vw, 100vh) scale(0.8996);
        }
    }
    .snow:nth-child(70) {
        opacity: 0.0578;
        transform: translate(93.6856vw, -10px) scale(0.9738);
        animation: fall-70 11s -23s linear infinite;
    }
    @keyframes fall-70 {
        78.948% {
            transform: translate(97.104vw, 78.948vh) scale(0.9738);
        }
        to {
            transform: translate(95.3948vw, 100vh) scale(0.9738);
        }
    }
    .snow:nth-child(71) {
        opacity: 0.1723;
        transform: translate(89.8721vw, -10px) scale(0.0647);
        animation: fall-71 25s -4s linear infinite;
    }
    @keyframes fall-71 {
        35.456% {
            transform: translate(99.722vw, 35.456vh) scale(0.0647);
        }
        to {
            transform: translate(94.79705vw, 100vh) scale(0.0647);
        }
    }
    .snow:nth-child(72) {
        opacity: 0.7728;
        transform: translate(64.6587vw, -10px) scale(0.3486);
        animation: fall-72 20s -2s linear infinite;
    }
    @keyframes fall-72 {
        78.727% {
            transform: translate(58.9687vw, 78.727vh) scale(0.3486);
        }
        to {
            transform: translate(61.8137vw, 100vh) scale(0.3486);
        }
    }
    .snow:nth-child(73) {
        opacity: 0.1201;
        transform: translate(90.5018vw, -10px) scale(0.3485);
        animation: fall-73 19s -16s linear infinite;
    }
    @keyframes fall-73 {
        67.579% {
            transform: translate(80.5227vw, 67.579vh) scale(0.3485);
        }
        to {
            transform: translate(85.51225vw, 100vh) scale(0.3485);
        }
    }
    .snow:nth-child(74) {
        opacity: 0.7034;
        transform: translate(33.6796vw, -10px) scale(0.1101);
        animation: fall-74 13s -12s linear infinite;
    }
    @keyframes fall-74 {
        71.64% {
            transform: translate(26.8094vw, 71.64vh) scale(0.1101);
        }
        to {
            transform: translate(30.2445vw, 100vh) scale(0.1101);
        }
    }
    .snow:nth-child(75) {
        opacity: 0.7816;
        transform: translate(19.7797vw, -10px) scale(0.4373);
        animation: fall-75 21s -5s linear infinite;
    }
    @keyframes fall-75 {
        51.522% {
            transform: translate(26.3952vw, 51.522vh) scale(0.4373);
        }
        to {
            transform: translate(23.08745vw, 100vh) scale(0.4373);
        }
    }
    .snow:nth-child(76) {
        opacity: 0.8453;
        transform: translate(44.693vw, -10px) scale(0.073);
        animation: fall-76 17s -24s linear infinite;
    }
    @keyframes fall-76 {
        75.371% {
            transform: translate(44.5956vw, 75.371vh) scale(0.073);
        }
        to {
            transform: translate(44.6443vw, 100vh) scale(0.073);
        }
    }
    .snow:nth-child(77) {
        opacity: 0.9727;
        transform: translate(99.8639vw, -10px) scale(0.2269);
        animation: fall-77 25s -6s linear infinite;
    }
    @keyframes fall-77 {
        74.034% {
            transform: translate(106.9067vw, 74.034vh) scale(0.2269);
        }
        to {
            transform: translate(103.3853vw, 100vh) scale(0.2269);
        }
    }
    .snow:nth-child(78) {
        opacity: 0.501;
        transform: translate(45.0932vw, -10px) scale(0.9455);
        animation: fall-78 18s -30s linear infinite;
    }
    @keyframes fall-78 {
        60.843% {
            transform: translate(48.027vw, 60.843vh) scale(0.9455);
        }
        to {
            transform: translate(46.5601vw, 100vh) scale(0.9455);
        }
    }
    .snow:nth-child(79) {
        opacity: 0.9663;
        transform: translate(95.207vw, -10px) scale(0.1598);
        animation: fall-79 18s -16s linear infinite;
    }
    @keyframes fall-79 {
        33.72% {
            transform: translate(103.366vw, 33.72vh) scale(0.1598);
        }
        to {
            transform: translate(99.2865vw, 100vh) scale(0.1598);
        }
    }
    .snow:nth-child(80) {
        opacity: 0.0345;
        transform: translate(39.5564vw, -10px) scale(0.0187);
        animation: fall-80 28s -3s linear infinite;
    }
    @keyframes fall-80 {
        65.283% {
            transform: translate(40.2231vw, 65.283vh) scale(0.0187);
        }
        to {
            transform: translate(39.88975vw, 100vh) scale(0.0187);
        }
    }
    .snow:nth-child(81) {
        opacity: 0.1239;
        transform: translate(51.9853vw, -10px) scale(0.8773);
        animation: fall-81 30s -19s linear infinite;
    }
    @keyframes fall-81 {
        74.794% {
            transform: translate(43.4027vw, 74.794vh) scale(0.8773);
        }
        to {
            transform: translate(47.694vw, 100vh) scale(0.8773);
        }
    }
    .snow:nth-child(82) {
        opacity: 0.0675;
        transform: translate(49.2307vw, -10px) scale(0.226);
        animation: fall-82 30s -8s linear infinite;
    }
    @keyframes fall-82 {
        56.017% {
            transform: translate(53.774vw, 56.017vh) scale(0.226);
        }
        to {
            transform: translate(51.50235vw, 100vh) scale(0.226);
        }
    }
    .snow:nth-child(83) {
        opacity: 0.8056;
        transform: translate(53.6318vw, -10px) scale(0.6);
        animation: fall-83 25s -10s linear infinite;
    }
    @keyframes fall-83 {
        34.879% {
            transform: translate(63.1249vw, 34.879vh) scale(0.6);
        }
        to {
            transform: translate(58.37835vw, 100vh) scale(0.6);
        }
    }
    .snow:nth-child(84) {
        opacity: 0.0641;
        transform: translate(37.6628vw, -10px) scale(0.1713);
        animation: fall-84 23s -19s linear infinite;
    }
    @keyframes fall-84 {
        77.212% {
            transform: translate(40.9907vw, 77.212vh) scale(0.1713);
        }
        to {
            transform: translate(39.32675vw, 100vh) scale(0.1713);
        }
    }
    .snow:nth-child(85) {
        opacity: 0.8365;
        transform: translate(16.8782vw, -10px) scale(0.7799);
        animation: fall-85 25s -21s linear infinite;
    }
    @keyframes fall-85 {
        69.249% {
            transform: translate(11.9569vw, 69.249vh) scale(0.7799);
        }
        to {
            transform: translate(14.41755vw, 100vh) scale(0.7799);
        }
    }
    .snow:nth-child(86) {
        opacity: 0.2743;
        transform: translate(88.5983vw, -10px) scale(0.8457);
        animation: fall-86 17s -27s linear infinite;
    }
    @keyframes fall-86 {
        45.513% {
            transform: translate(82.4829vw, 45.513vh) scale(0.8457);
        }
        to {
            transform: translate(85.5406vw, 100vh) scale(0.8457);
        }
    }
    .snow:nth-child(87) {
        opacity: 0.6829;
        transform: translate(51.1024vw, -10px) scale(0.9965);
        animation: fall-87 15s -28s linear infinite;
    }
    @keyframes fall-87 {
        37.539% {
            transform: translate(52.3725vw, 37.539vh) scale(0.9965);
        }
        to {
            transform: translate(51.73745vw, 100vh) scale(0.9965);
        }
    }
    .snow:nth-child(88) {
        opacity: 0.1346;
        transform: translate(65.9206vw, -10px) scale(0.0604);
        animation: fall-88 28s -21s linear infinite;
    }
    @keyframes fall-88 {
        45.242% {
            transform: translate(67.7026vw, 45.242vh) scale(0.0604);
        }
        to {
            transform: translate(66.8116vw, 100vh) scale(0.0604);
        }
    }
    .snow:nth-child(89) {
        opacity: 0.6608;
        transform: translate(23.3554vw, -10px) scale(0.5909);
        animation: fall-89 14s -20s linear infinite;
    }
    @keyframes fall-89 {
        62.212% {
            transform: translate(19.8231vw, 62.212vh) scale(0.5909);
        }
        to {
            transform: translate(21.58925vw, 100vh) scale(0.5909);
        }
    }
    .snow:nth-child(90) {
        opacity: 0.7677;
        transform: translate(38.5516vw, -10px) scale(0.4202);
        animation: fall-90 27s -16s linear infinite;
    }
    @keyframes fall-90 {
        78.712% {
            transform: translate(29.9637vw, 78.712vh) scale(0.4202);
        }
        to {
            transform: translate(34.25765vw, 100vh) scale(0.4202);
        }
    }
    .snow:nth-child(91) {
        opacity: 0.2417;
        transform: translate(16.3099vw, -10px) scale(0.2923);
        animation: fall-91 18s -7s linear infinite;
    }
    @keyframes fall-91 {
        67.95% {
            transform: translate(6.902vw, 67.95vh) scale(0.2923);
        }
        to {
            transform: translate(11.60595vw, 100vh) scale(0.2923);
        }
    }
    .snow:nth-child(92) {
        opacity: 0.2457;
        transform: translate(60.5448vw, -10px) scale(0.0144);
        animation: fall-92 30s -16s linear infinite;
    }
    @keyframes fall-92 {
        56.742% {
            transform: translate(58.4552vw, 56.742vh) scale(0.0144);
        }
        to {
            transform: translate(59.5vw, 100vh) scale(0.0144);
        }
    }
    .snow:nth-child(93) {
        opacity: 0.9404;
        transform: translate(34.4729vw, -10px) scale(0.9595);
        animation: fall-93 13s -25s linear infinite;
    }
    @keyframes fall-93 {
        48.373% {
            transform: translate(32.0628vw, 48.373vh) scale(0.9595);
        }
        to {
            transform: translate(33.26785vw, 100vh) scale(0.9595);
        }
    }
    .snow:nth-child(94) {
        opacity: 0.7942;
        transform: translate(93.9009vw, -10px) scale(0.8886);
        animation: fall-94 13s -7s linear infinite;
    }
    @keyframes fall-94 {
        57.833% {
            transform: translate(89.2453vw, 57.833vh) scale(0.8886);
        }
        to {
            transform: translate(91.5731vw, 100vh) scale(0.8886);
        }
    }
    .snow:nth-child(95) {
        opacity: 0.4525;
        transform: translate(57.7685vw, -10px) scale(0.6344);
        animation: fall-95 27s -9s linear infinite;
    }
    @keyframes fall-95 {
        42.013% {
            transform: translate(51.5826vw, 42.013vh) scale(0.6344);
        }
        to {
            transform: translate(54.67555vw, 100vh) scale(0.6344);
        }
    }
    .snow:nth-child(96) {
        opacity: 0.8231;
        transform: translate(95.5303vw, -10px) scale(0.0584);
        animation: fall-96 21s -8s linear infinite;
    }
    @keyframes fall-96 {
        60.501% {
            transform: translate(102.1608vw, 60.501vh) scale(0.0584);
        }
        to {
            transform: translate(98.84555vw, 100vh) scale(0.0584);
        }
    }
    .snow:nth-child(97) {
        opacity: 0.5175;
        transform: translate(64.2077vw, -10px) scale(0.2767);
        animation: fall-97 12s -27s linear infinite;
    }
    @keyframes fall-97 {
        73.864% {
            transform: translate(56.9133vw, 73.864vh) scale(0.2767);
        }
        to {
            transform: translate(60.5605vw, 100vh) scale(0.2767);
        }
    }
    .snow:nth-child(98) {
        opacity: 0.6753;
        transform: translate(81.3573vw, -10px) scale(0.7564);
        animation: fall-98 11s -12s linear infinite;
    }
    @keyframes fall-98 {
        75.507% {
            transform: translate(76.203vw, 75.507vh) scale(0.7564);
        }
        to {
            transform: translate(78.78015vw, 100vh) scale(0.7564);
        }
    }
    .snow:nth-child(99) {
        opacity: 0.1834;
        transform: translate(84.9742vw, -10px) scale(0.6461);
        animation: fall-99 12s -6s linear infinite;
    }
    @keyframes fall-99 {
        43.053% {
            transform: translate(80.9664vw, 43.053vh) scale(0.6461);
        }
        to {
            transform: translate(82.9703vw, 100vh) scale(0.6461);
        }
    }
    .snow:nth-child(100) {
        opacity: 0.301;
        transform: translate(91.5825vw, -10px) scale(0.1854);
        animation: fall-100 23s -23s linear infinite;
    }
    @keyframes fall-100 {
        50.054% {
            transform: translate(89.7421vw, 50.054vh) scale(0.1854);
        }
        to {
            transform: translate(90.6623vw, 100vh) scale(0.1854);
        }
    }
    .snow:nth-child(101) {
        opacity: 0.9868;
        transform: translate(49.5632vw, -10px) scale(0.4031);
        animation: fall-101 27s -24s linear infinite;
    }
    @keyframes fall-101 {
        43.096% {
            transform: translate(49.4661vw, 43.096vh) scale(0.4031);
        }
        to {
            transform: translate(49.51465vw, 100vh) scale(0.4031);
        }
    }
    .snow:nth-child(102) {
        opacity: 0.0608;
        transform: translate(36.9271vw, -10px) scale(0.111);
        animation: fall-102 22s -3s linear infinite;
    }
    @keyframes fall-102 {
        74.243% {
            transform: translate(32.3814vw, 74.243vh) scale(0.111);
        }
        to {
            transform: translate(34.65425vw, 100vh) scale(0.111);
        }
    }
    .snow:nth-child(103) {
        opacity: 0.5123;
        transform: translate(70.7934vw, -10px) scale(0.0794);
        animation: fall-103 11s -22s linear infinite;
    }
    @keyframes fall-103 {
        55.247% {
            transform: translate(74.5796vw, 55.247vh) scale(0.0794);
        }
        to {
            transform: translate(72.6865vw, 100vh) scale(0.0794);
        }
    }
    .snow:nth-child(104) {
        opacity: 0.3512;
        transform: translate(37.9946vw, -10px) scale(0.3415);
        animation: fall-104 21s -16s linear infinite;
    }
    @keyframes fall-104 {
        46.397% {
            transform: translate(41.9497vw, 46.397vh) scale(0.3415);
        }
        to {
            transform: translate(39.97215vw, 100vh) scale(0.3415);
        }
    }
    .snow:nth-child(105) {
        opacity: 0.6893;
        transform: translate(94.8496vw, -10px) scale(0.9205);
        animation: fall-105 20s -25s linear infinite;
    }
    @keyframes fall-105 {
        75.827% {
            transform: translate(88.4086vw, 75.827vh) scale(0.9205);
        }
        to {
            transform: translate(91.6291vw, 100vh) scale(0.9205);
        }
    }
    .snow:nth-child(106) {
        opacity: 0.6084;
        transform: translate(83.0898vw, -10px) scale(0.2746);
        animation: fall-106 28s -29s linear infinite;
    }
    @keyframes fall-106 {
        32.94% {
            transform: translate(73.136vw, 32.94vh) scale(0.2746);
        }
        to {
            transform: translate(78.1129vw, 100vh) scale(0.2746);
        }
    }
    .snow:nth-child(107) {
        opacity: 0.7576;
        transform: translate(26.2868vw, -10px) scale(0.8245);
        animation: fall-107 22s -1s linear infinite;
    }
    @keyframes fall-107 {
        32.521% {
            transform: translate(19.7949vw, 32.521vh) scale(0.8245);
        }
        to {
            transform: translate(23.04085vw, 100vh) scale(0.8245);
        }
    }
    .snow:nth-child(108) {
        opacity: 0.4719;
        transform: translate(85.5678vw, -10px) scale(0.2451);
        animation: fall-108 14s -13s linear infinite;
    }
    @keyframes fall-108 {
        63.36% {
            transform: translate(85.5884vw, 63.36vh) scale(0.2451);
        }
        to {
            transform: translate(85.5781vw, 100vh) scale(0.2451);
        }
    }
    .snow:nth-child(109) {
        opacity: 0.5434;
        transform: translate(52.7002vw, -10px) scale(0.4094);
        animation: fall-109 18s -27s linear infinite;
    }
    @keyframes fall-109 {
        46.382% {
            transform: translate(44.1833vw, 46.382vh) scale(0.4094);
        }
        to {
            transform: translate(48.44175vw, 100vh) scale(0.4094);
        }
    }
    .snow:nth-child(110) {
        opacity: 0.578;
        transform: translate(41.663vw, -10px) scale(0.4913);
        animation: fall-110 25s -7s linear infinite;
    }
    @keyframes fall-110 {
        79.387% {
            transform: translate(47.8957vw, 79.387vh) scale(0.4913);
        }
        to {
            transform: translate(44.77935vw, 100vh) scale(0.4913);
        }
    }
    .snow:nth-child(111) {
        opacity: 0.0787;
        transform: translate(71.4897vw, -10px) scale(0.4814);
        animation: fall-111 23s -27s linear infinite;
    }
    @keyframes fall-111 {
        31.983% {
            transform: translate(74.1964vw, 31.983vh) scale(0.4814);
        }
        to {
            transform: translate(72.84305vw, 100vh) scale(0.4814);
        }
    }
    .snow:nth-child(112) {
        opacity: 0.1144;
        transform: translate(82.8316vw, -10px) scale(0.5999);
        animation: fall-112 25s -10s linear infinite;
    }
    @keyframes fall-112 {
        74.157% {
            transform: translate(90.8973vw, 74.157vh) scale(0.5999);
        }
        to {
            transform: translate(86.86445vw, 100vh) scale(0.5999);
        }
    }
    .snow:nth-child(113) {
        opacity: 0.009;
        transform: translate(97.7391vw, -10px) scale(0.3836);
        animation: fall-113 12s -19s linear infinite;
    }
    @keyframes fall-113 {
        46.173% {
            transform: translate(90.4624vw, 46.173vh) scale(0.3836);
        }
        to {
            transform: translate(94.10075vw, 100vh) scale(0.3836);
        }
    }
    .snow:nth-child(114) {
        opacity: 0.6823;
        transform: translate(50.5196vw, -10px) scale(0.8487);
        animation: fall-114 25s -9s linear infinite;
    }
    @keyframes fall-114 {
        55.866% {
            transform: translate(55.3357vw, 55.866vh) scale(0.8487);
        }
        to {
            transform: translate(52.92765vw, 100vh) scale(0.8487);
        }
    }
    .snow:nth-child(115) {
        opacity: 0.7021;
        transform: translate(56.3643vw, -10px) scale(0.8039);
        animation: fall-115 13s -15s linear infinite;
    }
    @keyframes fall-115 {
        57.361% {
            transform: translate(52.2531vw, 57.361vh) scale(0.8039);
        }
        to {
            transform: translate(54.3087vw, 100vh) scale(0.8039);
        }
    }
    .snow:nth-child(116) {
        opacity: 0.1857;
        transform: translate(40.6977vw, -10px) scale(0.5359);
        animation: fall-116 30s -20s linear infinite;
    }
    @keyframes fall-116 {
        59.987% {
            transform: translate(30.9219vw, 59.987vh) scale(0.5359);
        }
        to {
            transform: translate(35.8098vw, 100vh) scale(0.5359);
        }
    }
    .snow:nth-child(117) {
        opacity: 0.9491;
        transform: translate(87.1124vw, -10px) scale(0.503);
        animation: fall-117 15s -18s linear infinite;
    }
    @keyframes fall-117 {
        72.996% {
            transform: translate(93.6378vw, 72.996vh) scale(0.503);
        }
        to {
            transform: translate(90.3751vw, 100vh) scale(0.503);
        }
    }
    .snow:nth-child(118) {
        opacity: 0.6107;
        transform: translate(11.2153vw, -10px) scale(0.362);
        animation: fall-118 22s -13s linear infinite;
    }
    @keyframes fall-118 {
        37.335% {
            transform: translate(18.6997vw, 37.335vh) scale(0.362);
        }
        to {
            transform: translate(14.9575vw, 100vh) scale(0.362);
        }
    }
    .snow:nth-child(119) {
        opacity: 0.1146;
        transform: translate(69.449vw, -10px) scale(0.832);
        animation: fall-119 17s -20s linear infinite;
    }
    @keyframes fall-119 {
        48.918% {
            transform: translate(63.9805vw, 48.918vh) scale(0.832);
        }
        to {
            transform: translate(66.71475vw, 100vh) scale(0.832);
        }
    }
    .snow:nth-child(120) {
        opacity: 0.4538;
        transform: translate(12.4984vw, -10px) scale(0.6824);
        animation: fall-120 28s -18s linear infinite;
    }
    @keyframes fall-120 {
        79.022% {
            transform: translate(19.0173vw, 79.022vh) scale(0.6824);
        }
        to {
            transform: translate(15.75785vw, 100vh) scale(0.6824);
        }
    }
    .snow:nth-child(121) {
        opacity: 0.0147;
        transform: translate(71.0867vw, -10px) scale(0.9257);
        animation: fall-121 25s -5s linear infinite;
    }
    @keyframes fall-121 {
        76.265% {
            transform: translate(62.8485vw, 76.265vh) scale(0.9257);
        }
        to {
            transform: translate(66.9676vw, 100vh) scale(0.9257);
        }
    }
    .snow:nth-child(122) {
        opacity: 0.7717;
        transform: translate(54.4111vw, -10px) scale(0.15);
        animation: fall-122 29s -20s linear infinite;
    }
    @keyframes fall-122 {
        36.637% {
            transform: translate(57.4132vw, 36.637vh) scale(0.15);
        }
        to {
            transform: translate(55.91215vw, 100vh) scale(0.15);
        }
    }
    .snow:nth-child(123) {
        opacity: 0.1821;
        transform: translate(76.2502vw, -10px) scale(0.6419);
        animation: fall-123 18s -16s linear infinite;
    }
    @keyframes fall-123 {
        32.241% {
            transform: translate(79.36vw, 32.241vh) scale(0.6419);
        }
        to {
            transform: translate(77.8051vw, 100vh) scale(0.6419);
        }
    }
    .snow:nth-child(124) {
        opacity: 0.46;
        transform: translate(41.275vw, -10px) scale(0.3311);
        animation: fall-124 17s -19s linear infinite;
    }
    @keyframes fall-124 {
        70.733% {
            transform: translate(37.2727vw, 70.733vh) scale(0.3311);
        }
        to {
            transform: translate(39.27385vw, 100vh) scale(0.3311);
        }
    }
    .snow:nth-child(125) {
        opacity: 0.769;
        transform: translate(22.0762vw, -10px) scale(0.1135);
        animation: fall-125 25s -2s linear infinite;
    }
    @keyframes fall-125 {
        40.275% {
            transform: translate(23.603vw, 40.275vh) scale(0.1135);
        }
        to {
            transform: translate(22.8396vw, 100vh) scale(0.1135);
        }
    }
    .snow:nth-child(126) {
        opacity: 0.6291;
        transform: translate(47.5051vw, -10px) scale(0.5653);
        animation: fall-126 23s -25s linear infinite;
    }
    @keyframes fall-126 {
        76.929% {
            transform: translate(55.0073vw, 76.929vh) scale(0.5653);
        }
        to {
            transform: translate(51.2562vw, 100vh) scale(0.5653);
        }
    }
    .snow:nth-child(127) {
        opacity: 0.0904;
        transform: translate(71.2016vw, -10px) scale(0.5684);
        animation: fall-127 28s -20s linear infinite;
    }
    @keyframes fall-127 {
        63.445% {
            transform: translate(68.6375vw, 63.445vh) scale(0.5684);
        }
        to {
            transform: translate(69.91955vw, 100vh) scale(0.5684);
        }
    }
    .snow:nth-child(128) {
        opacity: 0.5027;
        transform: translate(18.9023vw, -10px) scale(0.4775);
        animation: fall-128 23s -7s linear infinite;
    }
    @keyframes fall-128 {
        51.548% {
            transform: translate(24.3879vw, 51.548vh) scale(0.4775);
        }
        to {
            transform: translate(21.6451vw, 100vh) scale(0.4775);
        }
    }
    .snow:nth-child(129) {
        opacity: 0.9837;
        transform: translate(82.4924vw, -10px) scale(0.4881);
        animation: fall-129 30s -4s linear infinite;
    }
    @keyframes fall-129 {
        51.139% {
            transform: translate(89.9114vw, 51.139vh) scale(0.4881);
        }
        to {
            transform: translate(86.2019vw, 100vh) scale(0.4881);
        }
    }
    .snow:nth-child(130) {
        opacity: 0.0808;
        transform: translate(29.3831vw, -10px) scale(0.0768);
        animation: fall-130 19s -23s linear infinite;
    }
    @keyframes fall-130 {
        72.577% {
            transform: translate(34.4491vw, 72.577vh) scale(0.0768);
        }
        to {
            transform: translate(31.9161vw, 100vh) scale(0.0768);
        }
    }
    .snow:nth-child(131) {
        opacity: 0.9001;
        transform: translate(76.808vw, -10px) scale(0.8261);
        animation: fall-131 28s -26s linear infinite;
    }
    @keyframes fall-131 {
        38.274% {
            transform: translate(68.3839vw, 38.274vh) scale(0.8261);
        }
        to {
            transform: translate(72.59595vw, 100vh) scale(0.8261);
        }
    }
    .snow:nth-child(132) {
        opacity: 0.5505;
        transform: translate(33.4572vw, -10px) scale(0.33);
        animation: fall-132 21s -6s linear infinite;
    }
    @keyframes fall-132 {
        72.578% {
            transform: translate(33.6785vw, 72.578vh) scale(0.33);
        }
        to {
            transform: translate(33.56785vw, 100vh) scale(0.33);
        }
    }
    .snow:nth-child(133) {
        opacity: 0.367;
        transform: translate(38.4226vw, -10px) scale(0.7153);
        animation: fall-133 20s -24s linear infinite;
    }
    @keyframes fall-133 {
        38.31% {
            transform: translate(36.8742vw, 38.31vh) scale(0.7153);
        }
        to {
            transform: translate(37.6484vw, 100vh) scale(0.7153);
        }
    }
    .snow:nth-child(134) {
        opacity: 0.3756;
        transform: translate(90.787vw, -10px) scale(0.5379);
        animation: fall-134 20s -22s linear infinite;
    }
    @keyframes fall-134 {
        73.396% {
            transform: translate(94.791vw, 73.396vh) scale(0.5379);
        }
        to {
            transform: translate(92.789vw, 100vh) scale(0.5379);
        }
    }
    .snow:nth-child(135) {
        opacity: 0.8898;
        transform: translate(48.9559vw, -10px) scale(0.8489);
        animation: fall-135 22s -20s linear infinite;
    }
    @keyframes fall-135 {
        68.491% {
            transform: translate(49.0327vw, 68.491vh) scale(0.8489);
        }
        to {
            transform: translate(48.9943vw, 100vh) scale(0.8489);
        }
    }
    .snow:nth-child(136) {
        opacity: 0.0704;
        transform: translate(98.7374vw, -10px) scale(0.1229);
        animation: fall-136 26s -1s linear infinite;
    }
    @keyframes fall-136 {
        68.182% {
            transform: translate(105.1874vw, 68.182vh) scale(0.1229);
        }
        to {
            transform: translate(101.9624vw, 100vh) scale(0.1229);
        }
    }
    .snow:nth-child(137) {
        opacity: 0.1075;
        transform: translate(48.6082vw, -10px) scale(0.8514);
        animation: fall-137 24s -24s linear infinite;
    }
    @keyframes fall-137 {
        78.014% {
            transform: translate(46.4017vw, 78.014vh) scale(0.8514);
        }
        to {
            transform: translate(47.50495vw, 100vh) scale(0.8514);
        }
    }
    .snow:nth-child(138) {
        opacity: 0.9962;
        transform: translate(6.6797vw, -10px) scale(0.1306);
        animation: fall-138 10s -7s linear infinite;
    }
    @keyframes fall-138 {
        66.342% {
            transform: translate(14.98vw, 66.342vh) scale(0.1306);
        }
        to {
            transform: translate(10.82985vw, 100vh) scale(0.1306);
        }
    }
    .snow:nth-child(139) {
        opacity: 0.2808;
        transform: translate(59.4664vw, -10px) scale(0.3876);
        animation: fall-139 23s -4s linear infinite;
    }
    @keyframes fall-139 {
        65.39% {
            transform: translate(54.1528vw, 65.39vh) scale(0.3876);
        }
        to {
            transform: translate(56.8096vw, 100vh) scale(0.3876);
        }
    }
    .snow:nth-child(140) {
        opacity: 0.2191;
        transform: translate(5.2244vw, -10px) scale(0.2099);
        animation: fall-140 29s -19s linear infinite;
    }
    @keyframes fall-140 {
        31.876% {
            transform: translate(-1.1066vw, 31.876vh) scale(0.2099);
        }
        to {
            transform: translate(2.0589vw, 100vh) scale(0.2099);
        }
    }
    .snow:nth-child(141) {
        opacity: 0.6068;
        transform: translate(30.5605vw, -10px) scale(0.1785);
        animation: fall-141 27s -11s linear infinite;
    }
    @keyframes fall-141 {
        38.37% {
            transform: translate(30.617vw, 38.37vh) scale(0.1785);
        }
        to {
            transform: translate(30.58875vw, 100vh) scale(0.1785);
        }
    }
    .snow:nth-child(142) {
        opacity: 0.5732;
        transform: translate(23.001vw, -10px) scale(0.3221);
        animation: fall-142 22s -30s linear infinite;
    }
    @keyframes fall-142 {
        68.146% {
            transform: translate(14.6377vw, 68.146vh) scale(0.3221);
        }
        to {
            transform: translate(18.81935vw, 100vh) scale(0.3221);
        }
    }
    .snow:nth-child(143) {
        opacity: 0.1189;
        transform: translate(5.1176vw, -10px) scale(0.0236);
        animation: fall-143 16s -30s linear infinite;
    }
    @keyframes fall-143 {
        50.404% {
            transform: translate(12.9383vw, 50.404vh) scale(0.0236);
        }
        to {
            transform: translate(9.02795vw, 100vh) scale(0.0236);
        }
    }
    .snow:nth-child(144) {
        opacity: 0.546;
        transform: translate(42.7158vw, -10px) scale(0.3537);
        animation: fall-144 28s -6s linear infinite;
    }
    @keyframes fall-144 {
        63.475% {
            transform: translate(39.1669vw, 63.475vh) scale(0.3537);
        }
        to {
            transform: translate(40.94135vw, 100vh) scale(0.3537);
        }
    }
    .snow:nth-child(145) {
        opacity: 0.3212;
        transform: translate(21.0468vw, -10px) scale(0.4724);
        animation: fall-145 25s -26s linear infinite;
    }
    @keyframes fall-145 {
        78.277% {
            transform: translate(11.5998vw, 78.277vh) scale(0.4724);
        }
        to {
            transform: translate(16.3233vw, 100vh) scale(0.4724);
        }
    }
    .snow:nth-child(146) {
        opacity: 0.1619;
        transform: translate(96.9281vw, -10px) scale(0.6892);
        animation: fall-146 10s -18s linear infinite;
    }
    @keyframes fall-146 {
        70.197% {
            transform: translate(92.3649vw, 70.197vh) scale(0.6892);
        }
        to {
            transform: translate(94.6465vw, 100vh) scale(0.6892);
        }
    }
    .snow:nth-child(147) {
        opacity: 0.3838;
        transform: translate(83.2367vw, -10px) scale(0.6908);
        animation: fall-147 12s -30s linear infinite;
    }
    @keyframes fall-147 {
        43.52% {
            transform: translate(85.7105vw, 43.52vh) scale(0.6908);
        }
        to {
            transform: translate(84.4736vw, 100vh) scale(0.6908);
        }
    }
    .snow:nth-child(148) {
        opacity: 0.663;
        transform: translate(61.3425vw, -10px) scale(0.2862);
        animation: fall-148 23s -10s linear infinite;
    }
    @keyframes fall-148 {
        47.968% {
            transform: translate(70.2508vw, 47.968vh) scale(0.2862);
        }
        to {
            transform: translate(65.79665vw, 100vh) scale(0.2862);
        }
    }
    .snow:nth-child(149) {
        opacity: 0.8837;
        transform: translate(47.4115vw, -10px) scale(0.8164);
        animation: fall-149 22s -16s linear infinite;
    }
    @keyframes fall-149 {
        51.066% {
            transform: translate(53.768vw, 51.066vh) scale(0.8164);
        }
        to {
            transform: translate(50.58975vw, 100vh) scale(0.8164);
        }
    }
    .snow:nth-child(150) {
        opacity: 0.3466;
        transform: translate(99.384vw, -10px) scale(0.6971);
        animation: fall-150 15s -26s linear infinite;
    }
    @keyframes fall-150 {
        45.326% {
            transform: translate(94.908vw, 45.326vh) scale(0.6971);
        }
        to {
            transform: translate(97.146vw, 100vh) scale(0.6971);
        }
    }
    .snow:nth-child(151) {
        opacity: 0.0126;
        transform: translate(95.4931vw, -10px) scale(0.4669);
        animation: fall-151 13s -27s linear infinite;
    }
    @keyframes fall-151 {
        73.582% {
            transform: translate(102.7587vw, 73.582vh) scale(0.4669);
        }
        to {
            transform: translate(99.1259vw, 100vh) scale(0.4669);
        }
    }
    .snow:nth-child(152) {
        opacity: 0.4411;
        transform: translate(58.4434vw, -10px) scale(0.1183);
        animation: fall-152 30s -13s linear infinite;
    }
    @keyframes fall-152 {
        76.362% {
            transform: translate(52.0036vw, 76.362vh) scale(0.1183);
        }
        to {
            transform: translate(55.2235vw, 100vh) scale(0.1183);
        }
    }
    .snow:nth-child(153) {
        opacity: 0.7532;
        transform: translate(78.8663vw, -10px) scale(0.1986);
        animation: fall-153 21s -20s linear infinite;
    }
    @keyframes fall-153 {
        56.324% {
            transform: translate(83.2551vw, 56.324vh) scale(0.1986);
        }
        to {
            transform: translate(81.0607vw, 100vh) scale(0.1986);
        }
    }
    .snow:nth-child(154) {
        opacity: 0.6121;
        transform: translate(17.9075vw, -10px) scale(0.0684);
        animation: fall-154 23s -19s linear infinite;
    }
    @keyframes fall-154 {
        44.568% {
            transform: translate(22.7809vw, 44.568vh) scale(0.0684);
        }
        to {
            transform: translate(20.3442vw, 100vh) scale(0.0684);
        }
    }
    .snow:nth-child(155) {
        opacity: 0.1918;
        transform: translate(1.9456vw, -10px) scale(0.835);
        animation: fall-155 15s -15s linear infinite;
    }
    @keyframes fall-155 {
        31.662% {
            transform: translate(0.0354vw, 31.662vh) scale(0.835);
        }
        to {
            transform: translate(0.9905vw, 100vh) scale(0.835);
        }
    }
    .snow:nth-child(156) {
        opacity: 0.5792;
        transform: translate(11.8412vw, -10px) scale(0.3294);
        animation: fall-156 26s -13s linear infinite;
    }
    @keyframes fall-156 {
        72.352% {
            transform: translate(8.2926vw, 72.352vh) scale(0.3294);
        }
        to {
            transform: translate(10.0669vw, 100vh) scale(0.3294);
        }
    }
    .snow:nth-child(157) {
        opacity: 0.0598;
        transform: translate(56.9286vw, -10px) scale(0.3371);
        animation: fall-157 12s -27s linear infinite;
    }
    @keyframes fall-157 {
        75.669% {
            transform: translate(50.479vw, 75.669vh) scale(0.3371);
        }
        to {
            transform: translate(53.7038vw, 100vh) scale(0.3371);
        }
    }
    .snow:nth-child(158) {
        opacity: 0.1695;
        transform: translate(64.3001vw, -10px) scale(0.54);
        animation: fall-158 30s -9s linear infinite;
    }
    @keyframes fall-158 {
        45.859% {
            transform: translate(64.9448vw, 45.859vh) scale(0.54);
        }
        to {
            transform: translate(64.62245vw, 100vh) scale(0.54);
        }
    }
    .snow:nth-child(159) {
        opacity: 0.018;
        transform: translate(69.0803vw, -10px) scale(0.3512);
        animation: fall-159 27s -29s linear infinite;
    }
    @keyframes fall-159 {
        66.056% {
            transform: translate(73.3947vw, 66.056vh) scale(0.3512);
        }
        to {
            transform: translate(71.2375vw, 100vh) scale(0.3512);
        }
    }
    .snow:nth-child(160) {
        opacity: 0.3637;
        transform: translate(29.6992vw, -10px) scale(0.9677);
        animation: fall-160 18s -6s linear infinite;
    }
    @keyframes fall-160 {
        33.077% {
            transform: translate(19.8869vw, 33.077vh) scale(0.9677);
        }
        to {
            transform: translate(24.79305vw, 100vh) scale(0.9677);
        }
    }
    .snow:nth-child(161) {
        opacity: 0.5641;
        transform: translate(88.2302vw, -10px) scale(0.0106);
        animation: fall-161 22s -4s linear infinite;
    }
    @keyframes fall-161 {
        52.735% {
            transform: translate(88.4886vw, 52.735vh) scale(0.0106);
        }
        to {
            transform: translate(88.3594vw, 100vh) scale(0.0106);
        }
    }
    .snow:nth-child(162) {
        opacity: 0.5057;
        transform: translate(77.1742vw, -10px) scale(0.844);
        animation: fall-162 30s -1s linear infinite;
    }
    @keyframes fall-162 {
        48.417% {
            transform: translate(75.2012vw, 48.417vh) scale(0.844);
        }
        to {
            transform: translate(76.1877vw, 100vh) scale(0.844);
        }
    }
    .snow:nth-child(163) {
        opacity: 0.9152;
        transform: translate(38.6281vw, -10px) scale(0.9383);
        animation: fall-163 13s -1s linear infinite;
    }
    @keyframes fall-163 {
        33.034% {
            transform: translate(38.0197vw, 33.034vh) scale(0.9383);
        }
        to {
            transform: translate(38.3239vw, 100vh) scale(0.9383);
        }
    }
    .snow:nth-child(164) {
        opacity: 0.6952;
        transform: translate(82.4339vw, -10px) scale(0.6642);
        animation: fall-164 26s -26s linear infinite;
    }
    @keyframes fall-164 {
        77.901% {
            transform: translate(85.3488vw, 77.901vh) scale(0.6642);
        }
        to {
            transform: translate(83.89135vw, 100vh) scale(0.6642);
        }
    }
    .snow:nth-child(165) {
        opacity: 0.1034;
        transform: translate(12.4304vw, -10px) scale(0.2386);
        animation: fall-165 18s -26s linear infinite;
    }
    @keyframes fall-165 {
        42.558% {
            transform: translate(11.5255vw, 42.558vh) scale(0.2386);
        }
        to {
            transform: translate(11.97795vw, 100vh) scale(0.2386);
        }
    }
    .snow:nth-child(166) {
        opacity: 0.9793;
        transform: translate(66.6326vw, -10px) scale(0.841);
        animation: fall-166 12s -25s linear infinite;
    }
    @keyframes fall-166 {
        53.482% {
            transform: translate(71.0046vw, 53.482vh) scale(0.841);
        }
        to {
            transform: translate(68.8186vw, 100vh) scale(0.841);
        }
    }
    .snow:nth-child(167) {
        opacity: 0.7961;
        transform: translate(57.9551vw, -10px) scale(0.7922);
        animation: fall-167 10s -20s linear infinite;
    }
    @keyframes fall-167 {
        44.896% {
            transform: translate(65.5766vw, 44.896vh) scale(0.7922);
        }
        to {
            transform: translate(61.76585vw, 100vh) scale(0.7922);
        }
    }
    .snow:nth-child(168) {
        opacity: 0.4075;
        transform: translate(10.0494vw, -10px) scale(0.8015);
        animation: fall-168 21s -12s linear infinite;
    }
    @keyframes fall-168 {
        32.736% {
            transform: translate(5.5065vw, 32.736vh) scale(0.8015);
        }
        to {
            transform: translate(7.77795vw, 100vh) scale(0.8015);
        }
    }
    .snow:nth-child(169) {
        opacity: 0.6052;
        transform: translate(25.6779vw, -10px) scale(0.4542);
        animation: fall-169 18s -18s linear infinite;
    }
    @keyframes fall-169 {
        31.521% {
            transform: translate(20.7208vw, 31.521vh) scale(0.4542);
        }
        to {
            transform: translate(23.19935vw, 100vh) scale(0.4542);
        }
    }
    .snow:nth-child(170) {
        opacity: 0.4246;
        transform: translate(36.6366vw, -10px) scale(0.7961);
        animation: fall-170 25s -4s linear infinite;
    }
    @keyframes fall-170 {
        47.45% {
            transform: translate(29.6065vw, 47.45vh) scale(0.7961);
        }
        to {
            transform: translate(33.12155vw, 100vh) scale(0.7961);
        }
    }
    .snow:nth-child(171) {
        opacity: 0.0958;
        transform: translate(11.8676vw, -10px) scale(0.76);
        animation: fall-171 16s -10s linear infinite;
    }
    @keyframes fall-171 {
        32.286% {
            transform: translate(18.7688vw, 32.286vh) scale(0.76);
        }
        to {
            transform: translate(15.3182vw, 100vh) scale(0.76);
        }
    }
    .snow:nth-child(172) {
        opacity: 0.1893;
        transform: translate(52.8414vw, -10px) scale(0.0885);
        animation: fall-172 25s -16s linear infinite;
    }
    @keyframes fall-172 {
        68.586% {
            transform: translate(46.6044vw, 68.586vh) scale(0.0885);
        }
        to {
            transform: translate(49.7229vw, 100vh) scale(0.0885);
        }
    }
    .snow:nth-child(173) {
        opacity: 0.7089;
        transform: translate(85.0552vw, -10px) scale(0.2886);
        animation: fall-173 29s -20s linear infinite;
    }
    @keyframes fall-173 {
        38.091% {
            transform: translate(94.0673vw, 38.091vh) scale(0.2886);
        }
        to {
            transform: translate(89.56125vw, 100vh) scale(0.2886);
        }
    }
    .snow:nth-child(174) {
        opacity: 0.3963;
        transform: translate(49.9648vw, -10px) scale(0.2766);
        animation: fall-174 13s -5s linear infinite;
    }
    @keyframes fall-174 {
        49.653% {
            transform: translate(45.7574vw, 49.653vh) scale(0.2766);
        }
        to {
            transform: translate(47.8611vw, 100vh) scale(0.2766);
        }
    }
    .snow:nth-child(175) {
        opacity: 0.0306;
        transform: translate(45.9485vw, -10px) scale(0.9202);
        animation: fall-175 29s -13s linear infinite;
    }
    @keyframes fall-175 {
        40.15% {
            transform: translate(41.3182vw, 40.15vh) scale(0.9202);
        }
        to {
            transform: translate(43.63335vw, 100vh) scale(0.9202);
        }
    }
    .snow:nth-child(176) {
        opacity: 0.0944;
        transform: translate(3.5442vw, -10px) scale(0.3521);
        animation: fall-176 19s -19s linear infinite;
    }
    @keyframes fall-176 {
        65.06% {
            transform: translate(1.3192vw, 65.06vh) scale(0.3521);
        }
        to {
            transform: translate(2.4317vw, 100vh) scale(0.3521);
        }
    }
    .snow:nth-child(177) {
        opacity: 0.6691;
        transform: translate(18.1303vw, -10px) scale(0.8206);
        animation: fall-177 30s -18s linear infinite;
    }
    @keyframes fall-177 {
        41.366% {
            transform: translate(25.6077vw, 41.366vh) scale(0.8206);
        }
        to {
            transform: translate(21.869vw, 100vh) scale(0.8206);
        }
    }
    .snow:nth-child(178) {
        opacity: 0.8674;
        transform: translate(51.4451vw, -10px) scale(0.0747);
        animation: fall-178 24s -9s linear infinite;
    }
    @keyframes fall-178 {
        51.513% {
            transform: translate(50.3931vw, 51.513vh) scale(0.0747);
        }
        to {
            transform: translate(50.9191vw, 100vh) scale(0.0747);
        }
    }
    .snow:nth-child(179) {
        opacity: 0.0445;
        transform: translate(88.5644vw, -10px) scale(0.4473);
        animation: fall-179 21s -4s linear infinite;
    }
    @keyframes fall-179 {
        72.419% {
            transform: translate(81.4736vw, 72.419vh) scale(0.4473);
        }
        to {
            transform: translate(85.019vw, 100vh) scale(0.4473);
        }
    }
    .snow:nth-child(180) {
        opacity: 0.038;
        transform: translate(67.0599vw, -10px) scale(0.6875);
        animation: fall-180 26s -7s linear infinite;
    }
    @keyframes fall-180 {
        69.459% {
            transform: translate(74.9447vw, 69.459vh) scale(0.6875);
        }
        to {
            transform: translate(71.0023vw, 100vh) scale(0.6875);
        }
    }
    .snow:nth-child(181) {
        opacity: 0.6668;
        transform: translate(21.9007vw, -10px) scale(0.0366);
        animation: fall-181 21s -17s linear infinite;
    }
    @keyframes fall-181 {
        43.051% {
            transform: translate(28.2391vw, 43.051vh) scale(0.0366);
        }
        to {
            transform: translate(25.0699vw, 100vh) scale(0.0366);
        }
    }
    .snow:nth-child(182) {
        opacity: 0.439;
        transform: translate(80.6085vw, -10px) scale(0.341);
        animation: fall-182 20s -1s linear infinite;
    }
    @keyframes fall-182 {
        46.908% {
            transform: translate(89.7784vw, 46.908vh) scale(0.341);
        }
        to {
            transform: translate(85.19345vw, 100vh) scale(0.341);
        }
    }
    .snow:nth-child(183) {
        opacity: 0.6629;
        transform: translate(2.1212vw, -10px) scale(0.8274);
        animation: fall-183 10s -25s linear infinite;
    }
    @keyframes fall-183 {
        50.849% {
            transform: translate(2.7233vw, 50.849vh) scale(0.8274);
        }
        to {
            transform: translate(2.42225vw, 100vh) scale(0.8274);
        }
    }
    .snow:nth-child(184) {
        opacity: 0.954;
        transform: translate(15.4975vw, -10px) scale(0.8962);
        animation: fall-184 13s -10s linear infinite;
    }
    @keyframes fall-184 {
        39.723% {
            transform: translate(25.1584vw, 39.723vh) scale(0.8962);
        }
        to {
            transform: translate(20.32795vw, 100vh) scale(0.8962);
        }
    }
    .snow:nth-child(185) {
        opacity: 0.5719;
        transform: translate(87.6429vw, -10px) scale(0.4399);
        animation: fall-185 26s -17s linear infinite;
    }
    @keyframes fall-185 {
        31.306% {
            transform: translate(90.6111vw, 31.306vh) scale(0.4399);
        }
        to {
            transform: translate(89.127vw, 100vh) scale(0.4399);
        }
    }
    .snow:nth-child(186) {
        opacity: 0.3297;
        transform: translate(32.7146vw, -10px) scale(0.6019);
        animation: fall-186 11s -2s linear infinite;
    }
    @keyframes fall-186 {
        44.051% {
            transform: translate(25.7803vw, 44.051vh) scale(0.6019);
        }
        to {
            transform: translate(29.24745vw, 100vh) scale(0.6019);
        }
    }
    .snow:nth-child(187) {
        opacity: 0.4585;
        transform: translate(78.9837vw, -10px) scale(0.7246);
        animation: fall-187 21s -8s linear infinite;
    }
    @keyframes fall-187 {
        58.234% {
            transform: translate(85.1678vw, 58.234vh) scale(0.7246);
        }
        to {
            transform: translate(82.07575vw, 100vh) scale(0.7246);
        }
    }
    .snow:nth-child(188) {
        opacity: 0.2688;
        transform: translate(30.9387vw, -10px) scale(0.7072);
        animation: fall-188 26s -22s linear infinite;
    }
    @keyframes fall-188 {
        56.011% {
            transform: translate(29.5471vw, 56.011vh) scale(0.7072);
        }
        to {
            transform: translate(30.2429vw, 100vh) scale(0.7072);
        }
    }
    .snow:nth-child(189) {
        opacity: 0.0376;
        transform: translate(68.1085vw, -10px) scale(0.991);
        animation: fall-189 21s -26s linear infinite;
    }
    @keyframes fall-189 {
        39.143% {
            transform: translate(74.5882vw, 39.143vh) scale(0.991);
        }
        to {
            transform: translate(71.34835vw, 100vh) scale(0.991);
        }
    }
    .snow:nth-child(190) {
        opacity: 0.0948;
        transform: translate(77.5385vw, -10px) scale(0.9201);
        animation: fall-190 10s -9s linear infinite;
    }
    @keyframes fall-190 {
        77.243% {
            transform: translate(75.4096vw, 77.243vh) scale(0.9201);
        }
        to {
            transform: translate(76.47405vw, 100vh) scale(0.9201);
        }
    }
    .snow:nth-child(191) {
        opacity: 0.4512;
        transform: translate(43.8584vw, -10px) scale(0.606);
        animation: fall-191 21s -5s linear infinite;
    }
    @keyframes fall-191 {
        38.518% {
            transform: translate(46.485vw, 38.518vh) scale(0.606);
        }
        to {
            transform: translate(45.1717vw, 100vh) scale(0.606);
        }
    }
    .snow:nth-child(192) {
        opacity: 0.2044;
        transform: translate(29.4072vw, -10px) scale(0.2774);
        animation: fall-192 11s -10s linear infinite;
    }
    @keyframes fall-192 {
        39.711% {
            transform: translate(33.1326vw, 39.711vh) scale(0.2774);
        }
        to {
            transform: translate(31.2699vw, 100vh) scale(0.2774);
        }
    }
    .snow:nth-child(193) {
        opacity: 0.5901;
        transform: translate(82.116vw, -10px) scale(0.7133);
        animation: fall-193 16s -2s linear infinite;
    }
    @keyframes fall-193 {
        74.085% {
            transform: translate(87.7885vw, 74.085vh) scale(0.7133);
        }
        to {
            transform: translate(84.95225vw, 100vh) scale(0.7133);
        }
    }
    .snow:nth-child(194) {
        opacity: 0.6013;
        transform: translate(92.1152vw, -10px) scale(0.9484);
        animation: fall-194 26s -20s linear infinite;
    }
    @keyframes fall-194 {
        74.826% {
            transform: translate(92.7534vw, 74.826vh) scale(0.9484);
        }
        to {
            transform: translate(92.4343vw, 100vh) scale(0.9484);
        }
    }
    .snow:nth-child(195) {
        opacity: 0.158;
        transform: translate(34.7971vw, -10px) scale(0.6008);
        animation: fall-195 19s -12s linear infinite;
    }
    @keyframes fall-195 {
        50.315% {
            transform: translate(38.7203vw, 50.315vh) scale(0.6008);
        }
        to {
            transform: translate(36.7587vw, 100vh) scale(0.6008);
        }
    }
    .snow:nth-child(196) {
        opacity: 0.2238;
        transform: translate(17.5664vw, -10px) scale(0.2759);
        animation: fall-196 16s -15s linear infinite;
    }
    @keyframes fall-196 {
        55.954% {
            transform: translate(11.3601vw, 55.954vh) scale(0.2759);
        }
        to {
            transform: translate(14.46325vw, 100vh) scale(0.2759);
        }
    }
    .snow:nth-child(197) {
        opacity: 0.5917;
        transform: translate(24.3499vw, -10px) scale(0.9448);
        animation: fall-197 18s -4s linear infinite;
    }
    @keyframes fall-197 {
        73.641% {
            transform: translate(25.1708vw, 73.641vh) scale(0.9448);
        }
        to {
            transform: translate(24.76035vw, 100vh) scale(0.9448);
        }
    }
    .snow:nth-child(198) {
        opacity: 0.8752;
        transform: translate(25.9555vw, -10px) scale(0.1815);
        animation: fall-198 15s -1s linear infinite;
    }
    @keyframes fall-198 {
        47.827% {
            transform: translate(26.1279vw, 47.827vh) scale(0.1815);
        }
        to {
            transform: translate(26.0417vw, 100vh) scale(0.1815);
        }
    }
    .snow:nth-child(199) {
        opacity: 0.4459;
        transform: translate(34.0056vw, -10px) scale(0.4404);
        animation: fall-199 19s -30s linear infinite;
    }
    @keyframes fall-199 {
        75.751% {
            transform: translate(33.2457vw, 75.751vh) scale(0.4404);
        }
        to {
            transform: translate(33.62565vw, 100vh) scale(0.4404);
        }
    }
    .snow:nth-child(200) {
        opacity: 0.0646;
        transform: translate(24.0547vw, -10px) scale(0.5295);
        animation: fall-200 16s -12s linear infinite;
    }
    @keyframes fall-200 {
        32.202% {
            transform: translate(22.7279vw, 32.202vh) scale(0.5295);
        }
        to {
            transform: translate(23.3913vw, 100vh) scale(0.5295);
        }
    }

    body {
        text-align: center;
        color: white;
        background-color: #343139;
        font-family: 'Montserrat', sans-serif; }

    .title {
        margin: 100px 0 50px 0;
        letter-spacing: 3px;
        color: #DFE3EE; }

    .description {
        color: #DFE3EE;
        font-size: 1em;
        margin-bottom: 50px; }

    .container {
        width: 100%; }
    .container .row {
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex; }
    .container .col-3:nth-of-type(1) {
        width: 29.33%;
        margin-left: 5%;
        margin-right: 1%;
        border-bottom: 8px solid #FC6F72;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        background-color: #3E3937;
        height: 200px;
        color: #FC6F72; }
    .container .col-3:nth-of-type(2) {
        width: 29.33%;
        margin-right: 1%;
        border-bottom: 8px solid #A6CB5D;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        background-color: #3E3937;
        height: 200px;
        color: #A6CB5D; }
    .container .col-3:nth-of-type(3) {
        width: 29.33%;
        margin-right: 5%;
        border-bottom: 8px solid #EDC677;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        background-color: #3E3937;
        height: 200px;
        color: #EDC677; }

    span {
        font-size: 18px;
        display: block;
        margin: 15px 0 50px 0;
        font-weight: bold; }

    a {
        color: white; }

    i {
        opacity: 0.2;
        transition: 1s;
        -webkit-transition: 1s;
        -moz-transition: 1s;
        -o-transition: 1s; }
    i:hover {
        opacity: 1;
        cursor: pointer;
        transition: 1s;
        -webkit-transition: 1s;
        -moz-transition: 1s;
        -o-transition: 1s; }
</style>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="snow"></div>
<div class="container">

    <br>
    <br>
    <br>
    <h1>Login And Acl</h1>
    <p>گردآورندگان</p>
    <p>سعید رحیمی  -  عماد حسین زاده  -  احسان اعظم باغبانان </p>
    <h2 class="title">link GitHub</h2>
    <a href="https://github.com/ehking/newBlog" class="description" style="font-size: 60px;text-decoration: none">https://github.com/ehking/newBlog</a>
    <br>


</div>
</body>
</html>

