<div class="">
    <h1 class="py-4 text-base lg:text-xl">Update Password</h1>
    <p>Ensure your account is using a long random password to stay secure.</p>

    <div class="my-5">
        <form action="{{ route('update-password') }}" method="POST">
            @csrf
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success text-lime-600" role="alert">
                        {{ session('status') }}
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger text-red-700" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="mb-6">
                    <label for="oldPasswordInput" class="mb-2 block text-sm font-medium text-black">Old Password</label>
                    <input name="old_password" type="password"
                        class="form-control @error('old_password') is-invalid @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-base tracking-wide text-gray-900 focus:ring-blue-50"
                        id="oldPasswordInput" placeholder="Old Password">
                    @error('old_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="newPasswordInput" class="form-label">New Password</label>
                    <input name="new_password" type="password"
                        class="form-control @error('new_password') is-invalid @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-base tracking-wide text-gray-900 focus:ring-blue-50"
                        id="newPasswordInput" placeholder="New Password">
                    @error('new_password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                    <input name="new_password_confirmation" type="password"
                        class="form-control block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-base tracking-wide text-gray-900 focus:ring-blue-50"
                        id="confirmNewPasswordInput" placeholder="Confirm New Password">
                </div>

            </div>

            <div class="card-footer">
                <button type="submit"
                    class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">Save</button>
            </div>

        </form>

    </div>
</div>
