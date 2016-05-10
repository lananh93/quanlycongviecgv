@extends('layout.backend.lecturer.master')
@section('title')
    <div class="col-lg-12">
        <h1 class="page-header">Chế độ làm việc của giảng viên
        </h1>
    </div>
@endsection()
@section('content')
        <!-- /.col-lg-12 -->
    <h4 align="center">Bảng 1 - Định mức chuẩn khối lượng công việc</h4>
    <table class=" table table-bordered table-hover " >
        <thead>
        <tr align="center">
            <th rowspan="2">Ngạch</th>
            <th colspan="2">Giảng dạy</th>
            <th >Nghiên cứu khoa học</th>
            <th>Nhiệm vụ khác</th>

        </tr>
        </thead>
        <tbody>
            <tr class="odd gradeX" align="center">
                <td></td>
                <td>Số giờ thực</td>
                <td>Giờ chuẩn</td>
                <td>Số giờ thực</td>
                <td>Số giờ thực</td>
            </tr>

            <tr class="odd gradeX" align="center">
                <td>Giảng viên</td>
                <td>900</td>
                <td>270</td>
                <td>600</td>
                <td>260</td>
            </tr>
            <tr class="odd gradeX" align="center">
                <td>PVGD</td>
                <td>900</td>
                <td>270</td>
                <td>0</td>
                <td>860</td>
            </tr>
            <tr class="odd gradeX" align="center">
                <td>Giảng viên GDTC</td>
                <td>1260</td>
                <td>380</td>
                <td>0</td>
                <td>500</td>
            </tr>

            <tr class="odd gradeX" align="center">
                <td>Giảng viên GDQP</td>
                <td>1060</td>
                <td>320</td>
                <td>0</td>
                <td>700</td>
            </tr>
        </tbody>
    </table>

<br>
    <br>
    <p>	Định  mức  giờ  chuẩn  đối  với  giảng  viên  được  bổ  nhiệm  giữ chức vụ  lãnh đạo  hoặc  kiêm  nhiệm  các  công  tác  quản  lý, công  tác đảng, đoàn thể trong cơ sở giáo dục đại học được tính
    bằng việc số giờ quy định ở bảng 1 nhân với hệ số điều chỉnh trong bảng 2.</p>
    <br>

    <h4 align="center">Bảng 2 - Hệ số điều chỉnh khối lượng giảng dạy và nghiên cứu</h4>
    <table class="table table-bordered table-hover" >
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>Chức vụ/Chức trách</th>
            <th>Hệ số</th>


        </tr>
        </thead>
        <tbody>
        <tr class="odd gradeX" align="center">
            <td>1</td>
            <td>Hiệu trưởng</td>
            <td>15%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>2</td>
            <td>Chủ tịch hội đồng trường, Phó hiệu trưởng</td>
            <td>20%</td>
        </tr>
        <tr class="odd gradeX" align="center">
            <td>3</td>
            <td>Trưởng phòng, ban, giám đốc trung tâm quản lý hành chính cấp trường, giám đốc NXB BK; Viện trưởng các viện quản lý đào tạo: Viện ĐT sau đại học, Viện ĐT liên tục và viện ĐTquốc tế.</td>
            <td>25%</td>
        </tr>
        <tr class="odd gradeX" align="center">
            <td>4</td>
            <td>Bí thư Đoàn trường, Phó trưởng phòng, ban, Phó giám đốc tr ung tâm quản lý hành chính cấp trường, Phó giám đốc và Tổng biên tập NXB BK; Phó viện trưởng các viện quản lý đào tạo: Viện ĐT sau đại học, Viện ĐT liên tục và viện ĐTquốc tế.</td>
            <td>30%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>5</td>
            <td>Bí thư Đảng ủy trường, Chủ tịch Công đoàn trường, Phó bí thư Đoàn trường, Viện trưởng viện đào tạo</td>
            <td>50%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>6</td>
            <td>Phó bí thư, Ủy viên thường vụ, Thường trực Đảng ủy trường, Phó chủ tịch Công đoàn trường, Trưởng ban Thanh tra nhân dân, Trưởng ban nữ công, Chủ tịch Hội Cựu chiến binh</td>
            <td>60%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>7</td>
            <td>Phó viện trưởng viện đào tạo</td>
            <td>60%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>8</td>
            <td>Trưởng khoa Lý luận Chính trị và khoa GDTC, giám đốc trung tâm nghiên cứu cấp trường, Viện trưởng viện nghiên cứu</td>
            <td>70%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>9</td>
            <td>Phó trưởng khoa Lý luận Chính trị và khoa GDTC, Trưởng bộ môn và tương đương, Phó giám đốc trung tâm nghiên cứu cấp trường, Phó việnr tưởng viện nghiên cứu</td>
            <td>80%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>10</td>
            <td>Phó trưởng bộ môn và tương đương</td>
            <td>85%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>11</td>
            <td>Bí thư đảng ủy, Chủ tịch công đoàn viện đào tạo</td>
            <td>85%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>12</td>
            <td>Phó bí thư đảng ủy, Phó chủ tịch công đoàn viện đào tạo</td>
            <td>90%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>13</td>
            <td>GV, PVGD trong thời gian tập sự (hợp đồng lao động lần đầu)</td>
            <td>50%</td>

        </tr>

        <tr class="odd gradeX" align="center">
            <td>14</td>
            <td>Nghiên cứu sinh hệ tập trung trong thời gian quy định (3 năm), nghiên cứu sinh hệ không tập trung năm cuối</td>
            <td>0%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>15</td>
            <td>Nghiên cứu sinh hệ tập trung trong thời gian quy định (3 năm), nghiên cứu sinh hệ không tập trung năm cuối</td>
            <td>0%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>16</td>
            <td>Nghiên cứu sinh hệ không tập trung 3 năm đầu</td>
            <td>30%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>17</td>
            <td>Nữ nghỉ sinh con</td>
            <td>50%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>18</td>
            <td>Trưởng khoa GDQP-AN</td>
            <td>25%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>19</td>
            <td>Phó trưởng khoa GDQP-AN</td>
            <td>30%</td>
        </tr>

        <tr class="odd gradeX" align="center">
            <td>20</td>
            <td>Trưởng Bộ môn thuộc Khoa GDQP-AN</td>
            <td>40%</td>
        </tr>

        </tbody>
    </table>
@endsection()