<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketEase</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate on Scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body class="bg-gray-50">

    
    <!-- Login Section -->
    <section class="py-20 pt-32">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <div class="w-full md:w-2/3 lg:w-1/3">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-8">
                            {{$slot}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    

</body>
</html>