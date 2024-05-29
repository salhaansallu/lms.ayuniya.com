<nav x-data="{ open: false }" class="primary-bg">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex justify-end md:h-11">
            <!-- Settings Dropdown -->
            <div class="hidden md:flex md:items-center md:ms-6">
                <ul class="flex gap-6 text-white text-lg">
                    <li><a @click.prevent="" href="#"><i class="fa-regular fa-bell fa-shake"></i></a></li>
                    <li><a @click.prevent="" href="#"><i class="fa-regular fa-message"></i></a></li>
                    <li><a @click.prevent="" href="#"><i class="fa-solid fa-gear"></i></a></li>
                </ul>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white-400 dark:text-white-500 hover:white-500 focus:outline-none focus:text-white-500 dark:focus:text-white-400 transition duration-150 ease-in-out">
                    <svg class="h-10 w-10 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 grey-bg text-white">

            <div class="space-y-1 custom-nav">
                <div class="profile flex">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="">
                    <div class="profile_name">
                        <div class="flex welcome"><div class="active-dot"></div> <div class="">Welcome</div></div>
                        <div class="name">{{ Auth::user()->name }}</div>
                        <div class="role primary-text">Student</div>
                    </div>
                </div>
                <ul>
                    <li><a href="/dashboard"><i class="fa-solid fa-chart-bar"></i> Dashboard</a></li>
                    <li><a href="/subjects"><i class="fa-solid fa-graduation-cap"></i> Subjects</a></li>
                    <li><a href="/profile"><i class="fa-regular fa-user"></i> Profile</a></li>
                    <li><a href="/assignments"><i class="fa-solid fa-book-open"></i>  Assignments</a></li>
                    <li><a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
