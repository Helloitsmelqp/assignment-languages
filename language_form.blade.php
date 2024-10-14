<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Preferences</title>
</head>
<body>
    <h1> Languages</h1>

    <form id="language-form" action="{{ route('language.save') }}" method="POST">
        @csrf
        <label for="language">Choose a language:</label>
        <select id="language" name="language" onchange="submitForm()">
            <option value="en" {{ $savedLanguage == 'english' ? 'selected' : '' }}>English</option>
            <option value="ar" {{ $savedLanguage == 'arabic' ? 'selected' : '' }}>Arabic</option>
            <option value="sp" {{ $savedLanguage == 'spanish' ? 'selected' : '' }}>spanish</option>
        </select><br><br>

        <input type="checkbox" id="rememberMe" name="rememberMe" {{ $rememberMe ? 'checked' : '' }} onchange="submitForm()">
        <label for="remember Me">Remember Me</label>
    </form>

    <script>
        function submitForm() {
            document.getElementById('language-form').submit();
        }
    </script>
</body>
</html>
