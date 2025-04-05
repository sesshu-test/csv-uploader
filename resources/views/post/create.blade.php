<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>新規投稿</h2>
  <form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <x-form.input name="content" label="内容" type="text" />

    <button
        type="submit"
        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
    >
        投稿
    </button>
  </form>
</body>
</html>