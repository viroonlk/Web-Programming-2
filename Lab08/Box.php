<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper {
        display: grid;
        grid-template-columns: (1fr 1fr 1fr);
        gap: 10px;
        padding: 20px;
        
        }

        .box1 {
        grid-column: 1 / 4;
        grid-row: 1 / 3;
        text-align: center;
        }

        .nested {
        border : 10px solid #ccc;
        padding: 5px;
        text-align: center;
    }
        

        img {
            width: 30%;
            height: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper"></div>
        <div class="box1">
            <div class= "nested">
            <img src="https://media.discordapp.net/attachments/1131153726120394832/1338427952068825089/ray01.png?ex=67ab0baa&is=67a9ba2a&hm=ea6499c85cc40d9a2328ff116299759d2902e71cd31944c49aa607cb60474c43&=&format=webp&quality=lossless" alt="Image 1">
            <img src="https://media.discordapp.net/attachments/1131153726120394832/1338419036161179679/image-removebg-preview_4.png?ex=67ab035c&is=67a9b1dc&hm=089e0f0826bfe3934bc74c5d707b44365651228c6ac4bf2b624f52d26bf0185e&=&format=webp&quality=lossless" alt="Image 2">
            <img src="https://media.discordapp.net/attachments/1131153726120394832/1338419036417167481/image-removebg-preview_3.png?ex=67ab035c&is=67a9b1dc&hm=0f37b8a12f2d7b191195c624b32b39cbde9bee2b4e7dddfa75416033f35445c4&=&format=webp&quality=lossless" alt="Image 3">
            </div>
            </div>


        <div class="box1">
        <div class= "nested">
            <img src="https://media.discordapp.net/attachments/1131153726120394832/1338419036945649735/image-removebg-preview_1.png?ex=67ab035d&is=67a9b1dd&hm=5639143d44ae03aa460e663175e3dec212d8fc4897a1040f73fbb5f500dde9fd&=&format=webp&quality=lossless" alt="Image 4">
            <img src="https://media.discordapp.net/attachments/1131153726120394832/1338419037289451571/image-removebg-preview.png?ex=67ab035d&is=67a9b1dd&hm=0c6a054b4c398c2e2727bd4970f2bbca523336baa3a12d5cf9d1b08f331ec730&=&format=webp&quality=lossless&width=340&height=453" alt="Image 5">
            <img src="https://www.central.co.th/e-shopping/wp-content/uploads/2020/12/YELLOW-TEETH1-475x247.jpg" alt="Image 6">
        </div>
        </div>


    </div>
</body>
</html>
