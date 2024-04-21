

<aside class=" z-40 w-64 h-screen" >
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <ul class="space-y-2 font-normal">

          <li>
             <a href="{{route('AgencyManager.showPanel')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                @if (request()->route()->named('AgencyManager.showPanel'))
                <span class="ml-3 font-medium">Dashboard</span>
                @else
                <span class="ml-3">Dashboard</span>
                @endif
             </a>
          </li>

          <li>
            <a href="{{route('AgencyManager.car.showAll')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
               @if (request()->routeIs('AgencyManager.car.*'))
               <span class="flex-1 ml-3 whitespace-nowrap font-medium">véhicules</span>
              @else
              <span class="flex-1 ml-3 whitespace-nowrap">véhicules</span>
              @endif

            </a>
         </li>

         <li>
            <a href="{{route('AgencyManager.offer.showAll')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 " width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V4C20 3.46957 19.7893 2.96086 19.4142 2.58579C19.0391 2.21071 18.5304 2 18 2Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 16L9.348 15.76C10.813 14.747 13.188 14.747 14.652 15.76L15 16M8 7H8.01M16 7H16.01M12 7H12.01M12 11H12.01M16 11H16.01M8 11H8.01M10 22V15.5M14 15.5V22" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>


                    @if (request()->routeIs('AgencyManager.offer.*'))
                    <span class="flex-1 ml-3 font-medium whitespace-nowrap">offers</span>
                    @else
                    <span class="flex-1 ml-3 whitespace-nowrap">offers</span>
                    @endif

            </a>
         </li>
         <li>
            <a href="{{route('AgencyManager.rental.showAll')}}"  class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>

               @if (request()->routeIs('AgencyManager.rental.*'))
               <span class="flex-1 ml-3 whitespace-nowrap font-medium">Rentals</span>
               @else
               <span class="flex-1 ml-3 whitespace-nowrap">Rentals</span>
               @endif


               <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">0</span>
            </a>
         </li>
          <li>
             <a href="{{route('AgencyManager.clients.showAll')}}"  class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>

                @if (request()->routeIs('AgencyManager.clients.*'))
                <span class="flex-1 ml-3 whitespace-nowrap font-medium">Clients</span>
               @else
               <span class="flex-1 ml-3 whitespace-nowrap">Clients</span>
               @endif
             </a>
          </li>

          <li>
            <button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" onclick="toggle()"
            >


                  <svg width="48" height="48" viewBox="0 0 48 48" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M24 4L18 10H10V18L4 24L10 30V38H18L24 44L30 38H38V30L44 24L38 18V10H30L24 4Z" stroke="black" stroke-width="4" stroke-linejoin="round"/>
                   <path d="M24 30C25.5913 30 27.1174 29.3679 28.2426 28.2426C29.3679 27.1174 30 25.5913 30 24C30 22.4087 29.3679 20.8826 28.2426 19.7574C27.1174 18.6321 25.5913 18 24 18C22.4087 18 20.8826 18.6321 19.7574 19.7574C18.6321 20.8826 18 22.4087 18 24C18 25.5913 18.6321 27.1174 19.7574 28.2426C20.8826 29.3679 22.4087 30 24 30Z" stroke="black" stroke-width="4" stroke-linejoin="round"/>
                   </svg>


                  <span class="flex-1 ml-3 text-left whitespace-nowrap font-normal">Configurations</span>




                  <svg   class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <ul id="collpase"  data-te-collapse-item class="hidden py-2 space-y-2">

                  <li>
                     <a class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Opt 1</a>
                  </li>
                  <li>
                     <a  class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Opt 2</a>
                  </li>
                  <li>
                    <a  class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Opt 3</a>
                 </li>
            </ul>
         </li>
          <li>
             <a href="{{route('AgencyManager.logout')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
             </a>
          </li>

       </ul>
    </div>
 </aside>


<script>

function toggle(){
    x = document.getElementById('collpase').classList + "";
    if(x.indexOf('hidden')!=-1){
        document.getElementById('collpase').classList.remove('hidden');
    }else{
        document.getElementById('collpase').classList.add('hidden');
    }
}

</script>
