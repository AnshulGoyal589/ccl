<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Academy Locations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .state-box {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            border-radius: 5px;
        }

        .city-box {
            border: 2px solid #007bff;
            padding: 8px;
            text-align: center;
            border-radius: 5px;
        }

        .line {
            border-left: 2px solid #007bff;
            height: 40px;
            margin: 0 auto;
        }

        .line-horizontal {
            border-top: 2px solid #007bff;
            width: 100%;
        }

        .connector {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-5">Cricket Academy Locations</h2>

        <!-- Row for Rajasthan -->
        <div class="row text-center">
            <div class="col-12">
                <div class="state-box">Rajasthan (RJ)</div>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col connector">
                <div class="line"></div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="city-box">Jodhpur</div>
            </div>
            <div class="col">
                <div class="city-box">Jaipur</div>
            </div>
            <div class="col">
                <div class="city-box">Kota</div>
            </div>
            <div class="col">
                <div class="city-box">Bikaner</div>
            </div>
            <div class="col">
                <div class="city-box">Jaisalmer</div>
            </div>
        </div>

        <!-- Row for Uttar Pradesh -->
        <div class="row text-center">
            <div class="col-12">
                <div class="state-box">Uttar Pradesh (UP)</div>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col connector">
                <div class="line"></div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="city-box">Lucknow (Centre)</div>
            </div>
            <div class="col">
                <div class="city-box">Prayagraj (South)</div>
            </div>
            <div class="col">
                <div class="city-box">Bareilly (West)</div>
            </div>
            <div class="col">
                <div class="city-box">Agra (West)</div>
            </div>
            <div class="col">
                <div class="city-box">Noida (NCR)</div>
            </div>
        </div>

        <!-- Row for Punjab -->
        <div class="row text-center">
            <div class="col-12">
                <div class="state-box">Punjab (PB)</div>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col connector">
                <div class="line"></div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="city-box">Chandigarh</div>
            </div>
            <div class="col">
                <div class="city-box">Jalandhar</div>
            </div>
            <div class="col">
                <div class="city-box">Amritsar</div>
            </div>
        </div>

        <!-- Row for Himachal Pradesh -->
        <div class="row text-center">
            <div class="col-12">
                <div class="state-box">Himachal Pradesh (HP)</div>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col connector">
                <div class="line"></div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="city-box">Shimla</div>
            </div>
        </div>

        <!-- Row for Uttarakhand -->
        <div class="row text-center">
            <div class="col-12">
                <div class="state-box">Uttarakhand (UK)</div>
            </div>
        </div>
        <div class="row text-center mt-2">
            <div class="col connector">
                <div class="line"></div>
            </div>
        </div>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="city-box">Dehradun</div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>