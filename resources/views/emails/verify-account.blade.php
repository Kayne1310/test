<h3>Hi: {{ $account->name }}</h3>
<p>
    Test
</p>

<p>
    <a href="{{ route('account.veryfy', $account->email) }}">Click here to verify your account</a>
</p>
