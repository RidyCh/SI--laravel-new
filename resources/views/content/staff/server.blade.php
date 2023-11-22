@extends('layouts.main')
@section('container')
<div class="container-md mt-20 shadow-md ">
    <table class="w-full text-sm  text-left rtl:text-right text-gray-500 dark:text-gray-400">
                   <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                       <tr>
                           <th scope="col" class="p-4">

                           </th>
                           <th scope="col" class="px-6 py-3">
                               #
                           </th>
                           <th scope="col" class="px-6 py-3">
                               Nama Folder
                           </th>
                           <th scope="col" class="px-6 py-3">
                               Status
                           </th>
                           <th scope="col" class="px-6 py-3">
                               Action
                           </th>
                       </tr>
                   </thead>
                   @foreach ($folder as $b)
                       <tbody class="dark:bg-gray-800 dark:border-gray-700">

                           <tr
                               class="bg-white text-gray-800 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                               <td class="w-4 p-4">

                               </td>
                               <th scope="row"
                                   class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                   <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50"
                                       viewBox="0 0 48 48">
                                       <linearGradient id="Om5yvFr6YrdlC0q2Vet0Ha_WWogVNJDSfZ5_gr1" x1="-7.018"
                                           x2="39.387" y1="9.308" y2="33.533" gradientUnits="userSpaceOnUse">
                                           <stop offset="0" stop-color="#fac017"></stop>
                                           <stop offset=".909" stop-color="#e1ab2d"></stop>
                                       </linearGradient>
                                       <path fill="url(#Om5yvFr6YrdlC0q2Vet0Ha_WWogVNJDSfZ5_gr1)"
                                           d="M44.5,41h-41C2.119,41,1,39.881,1,38.5v-31C1,6.119,2.119,5,3.5,5h11.597	c1.519,0,2.955,0.69,3.904,1.877L21.5,10h23c1.381,0,2.5,1.119,2.5,2.5v26C47,39.881,45.881,41,44.5,41z">
                                       </path>
                                       <linearGradient id="Om5yvFr6YrdlC0q2Vet0Hb_WWogVNJDSfZ5_gr2" x1="5.851"
                                           x2="18.601" y1="9.254" y2="27.39" gradientUnits="userSpaceOnUse">
                                           <stop offset="0" stop-color="#fbfef3"></stop>
                                           <stop offset=".909" stop-color="#e2e4e3"></stop>
                                       </linearGradient>
                                       <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hb_WWogVNJDSfZ5_gr2)"
                                           d="M2,25h20V11H4c-1.105,0-2,0.895-2,2V25z"></path>
                                       <linearGradient id="Om5yvFr6YrdlC0q2Vet0Hc_WWogVNJDSfZ5_gr3" x1="2"
                                           x2="22" y1="19" y2="19" gradientUnits="userSpaceOnUse">
                                           <stop offset="0" stop-color="#fbfef3"></stop>
                                           <stop offset=".909" stop-color="#e2e4e3"></stop>
                                       </linearGradient>
                                       <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hc_WWogVNJDSfZ5_gr3)"
                                           d="M2,26h20V12H4c-1.105,0-2,0.895-2,2V26z"></path>
                                       <linearGradient id="Om5yvFr6YrdlC0q2Vet0Hd_WWogVNJDSfZ5_gr4" x1="16.865"
                                           x2="44.965" y1="39.287" y2="39.792" gradientUnits="userSpaceOnUse">
                                           <stop offset="0" stop-color="#e3a917"></stop>
                                           <stop offset=".464" stop-color="#d79c1e"></stop>
                                       </linearGradient>
                                       <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hd_WWogVNJDSfZ5_gr4)"
                                           d="M1,37.875V38.5C1,39.881,2.119,41,3.5,41h41c1.381,0,2.5-1.119,2.5-2.5v-0.625H1z">
                                       </path>
                                       <linearGradient id="Om5yvFr6YrdlC0q2Vet0He_WWogVNJDSfZ5_gr5" x1="-4.879"
                                           x2="35.968" y1="12.764" y2="30.778" gradientUnits="userSpaceOnUse">
                                           <stop offset=".34" stop-color="#ffefb2"></stop>
                                           <stop offset=".485" stop-color="#ffedad"></stop>
                                           <stop offset=".652" stop-color="#ffe99f"></stop>
                                           <stop offset=".828" stop-color="#fee289"></stop>
                                           <stop offset="1" stop-color="#fed86b"></stop>
                                       </linearGradient>
                                       <path fill="url(#Om5yvFr6YrdlC0q2Vet0He_WWogVNJDSfZ5_gr5)"
                                           d="M44.5,11h-23l-1.237,0.824C19.114,12.591,17.763,13,16.381,13H3.5C2.119,13,1,14.119,1,15.5	v22C1,38.881,2.119,40,3.5,40h41c1.381,0,2.5-1.119,2.5-2.5v-24C47,12.119,45.881,11,44.5,11z">
                                       </path>
                                       <radialGradient id="Om5yvFr6YrdlC0q2Vet0Hf_WWogVNJDSfZ5_gr6" cx="37.836"
                                           cy="49.317" r="53.875" gradientUnits="userSpaceOnUse">
                                           <stop offset=".199" stop-color="#fec832"></stop>
                                           <stop offset=".601" stop-color="#fcd667"></stop>
                                           <stop offset=".68" stop-color="#fdda75"></stop>
                                           <stop offset=".886" stop-color="#fee496"></stop>
                                           <stop offset="1" stop-color="#ffe8a2"></stop>
                                       </radialGradient>
                                       <path fill="url(#Om5yvFr6YrdlC0q2Vet0Hf_WWogVNJDSfZ5_gr6)"
                                           d="M44.5,40h-41C2.119,40,1,38.881,1,37.5v-21C1,15.119,2.119,14,3.5,14h13.256	c1.382,0,2.733-0.409,3.883-1.176L21.875,12H44.5c1.381,0,2.5,1.119,2.5,2.5v23C47,38.881,45.881,40,44.5,40z">
                                       </path>
                                   </svg>

                               </th>
                               <td class="px-6 py-4">
                                   {{ $b->nama_folder }}
                               </td>
                               <td class="px-6 py-4">
                                   {{ $b->role }}
                               </td>
                               <td class="px-6 py-4">
                                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><i</button>
                               </td>
                           </tr>

                       </tbody>
                   @endforeach
               </table>
</div>
@endsection