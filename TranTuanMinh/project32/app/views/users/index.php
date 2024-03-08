<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hahaha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quan li danh ba</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Mã nhân viên</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Chức vụ</th>
                <th scope="col">Mật khẩu</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <th scope="row"><?= $user->getEmployeeId() ?></th>
                    <td><?= $user->getUsername() ?></td>
                    <td><?= $user->getUserRole() ?></td>
                    <td><?= $user->getPass() ?></td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>