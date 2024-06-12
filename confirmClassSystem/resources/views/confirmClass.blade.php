<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Confirm Class Student</title>
    <style>
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }
        
        #image {
            max-width: 80%;
            max-height: 80%;
        }
    </style>
</head>
<body>
    {{-- ตารางแสดงผล START--}}
    <div>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>ชื่อ นามสกุล</th>
                <th>หลักสูตร</th>
                <th>บทเรียน</th>
                <th>รูปถ่ายตอนล็อคอิน</th>
                <th>ไฟล์ภาพ</th>
                <th>วันที่สร้าง</th>
                <th>วันที่แก้ไข</th>
            </tr>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->program }}</td>
                    <td>{{ $item->course }}</td>
                    <td>    
                        <button class="showImageBtn" onclick="showImage('{{ $item->login_image }}')">Show Image</button>
                    </td>                        
                    <td>    
                        <button class="showImageBtn" onclick="showImage('{{ $item->image_file }}')">Show Image</button>
                    </td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    {{-- ตารางแสดงผล END --}}

    <div id="overlay" onclick="hideImage()">
        <img id="image" src="" alt="Image">
    </div>
    
    <script>
        function showImage(src) {
            var overlay = document.getElementById('overlay');
            var image = document.getElementById('image');
            image.src = src;
            overlay.style.display = 'flex';
        }

        function hideImage() {
            var overlay = document.getElementById('overlay');
            overlay.style.display = 'none';
        }
    </script>
</body>
</html>
