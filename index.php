Q1:
use Illuminate\Http\Request;

// Inside your controller method
public function handleForm(Request $request)
{
    $name = $request->input('name');
    // Other code...

    // Example usage
    echo "Hello, $name!";
}

Q2:
use Illuminate\Http\Request;

// Inside your controller method
public function example(Request $request)
{
    $userAgent = $request->header('User-Agent');
    // Other code...

    // Example usage
    echo "User-Agent: $userAgent";
}
Q3:use Illuminate\Http\Request;

// Inside your controller method
public function example(Request $request)
{
    $page = $request->query('page', null);
    // Other code...

    // Example usage
    if ($page !== null) {
        echo "Page: $page";
    } else {
        echo "Page parameter is not present";
    }
}

Q4:
use Illuminate\Http\Response;

// Inside your controller method
public function example()
{
    $data = [
        'message' => 'Success',
        'data' => [
            'name' => 'John Doe',
            'age' => 25,
        ],
    ];

    return response()->json($data);
}
JSON*********
{
    "message": "Success",
    "data": {
        "name": "John Doe",
        "age": 25
    }
}

Q5:
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Inside your controller method
public function handleFileUpload(Request $request)
{
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();

        $file->storeAs('uploads', $filename, 'public');
        // Other code...

        // Example usage
        echo "File uploaded successfully!";
    } else {
        // Handle case when 'avatar' file is not present in the request
    }
}
Q6:
use Illuminate\Http\Request;

// Inside your controller method
public function example(Request $request)
{
    $rememberToken = $request->cookie('remember_token', null);
    // Other code...

    // Example usage
    if ($rememberToken !== null) {
        echo "Remember Token: $rememberToken";
    } else {
        echo "Remember Token cookie is not present";
    }
}
Q7:
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    // Other code...

    // Return JSON response
    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.',
    ]);
});
