<?php include 'header.php'; ?>

<body>
    <!-- Add CSS for the popup and base styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            /* padding: 40px 20px; */
            display: flex;
            flex-direction : column;
            min-height: 100vh;
        }
        
        .profile-card {
            display: flex;
            max-width: 900px;
            width: 100%;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            padding : 40px 0;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
        }
    
    </style>


    <div class="profile-card">
        
        <img src="https://res.cloudinary.com/dxk6wjttq/image/upload/v1753969781/portfolio_rxclsq.png" alt="portfolio" style="width: 100%; height: 100%; object-fit: cover;">
        
    </div>

</body>

<?php include 'footer.php'; ?>