<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Boostrap</title>
    <!-- link style boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-5 shadow-lg p-5 bg-white rounded-3">
            <form onsubmit="showFormData(event)">
                <h1 class="text-center mb-4 text-success h2">USING FORM BOOTSTRAP</h1>
                
                <!-- Bootstrap Alert Box (Hidden by Default) -->
                <div id="formAlert" class="alert alert-success d-none" role="alert"></div>
                
                <div class="mb-3">
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" id="salary" placeholder="Enter your salary" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" id="hiredate" placeholder="Enter your hiredate" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success w-50 me-2">Submit</button>
                    <button type="reset" class="btn btn-danger w-50 me-2">Reset</button>
                    <button type="button" class="btn btn-info">Back</button>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- link javaScript for boostrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</html>