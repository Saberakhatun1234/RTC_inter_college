<?php
include("header.php")
?>

<section class="relative  overflow-hidden rounded-xl mb-10">
  <img src="./images/notice.jpg" alt="notice" class="w-full max-h-40">
</section>
<section class="grid sm:grid-cols-1 md:grid-cols-[3fr_1fr] gap-8 sm:p-1 md:p-8">
  <!-- Notices (75%) -->
  <div class="flex flex-col">
    <h2 class="text-3xl font-bold text-blue-800 hover:text-pink-700 transition-colors mb-4">
      Notices
    </h2>
    <div class="bg-green-300  rounded flex-1 max-h-96 overflow-y-auto">
      <table class="w-full text-center">
        <thead class="sticky top-0">
          <tr>
            <th class="px-4 py-2 border bg-slate-900 text-white font-bold">Holiday</th>
            <th class="px-4 py-2 border bg-slate-900 text-white font-bold">Date</th>
            <th class="px-4 py-2 border bg-slate-900 text-white font-bold">Holiday Type</th>
          </tr>
        </thead>
<tbody>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Republic Day</td>
    <td class="border-2 text-white font-thin hover:font-bold">Jan 26, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Holi</td>
    <td class="border-2 text-white font-thin hover:font-bold">Mar 14–15, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Bihar Diwas</td>
    <td class="border-2 text-white font-thin hover:font-bold">Mar 22, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">State holiday</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Eid-ul-Fitr</td>
    <td class="border-2 text-white font-thin hover:font-bold">Mar 31, 2025 <em>(tentative)</em></td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Mahavir Jayanti</td>
    <td class="border-2 text-white font-thin hover:font-bold">Apr 10, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Good Friday</td>
    <td class="border-2 text-white font-thin hover:font-bold">Apr 18, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Buddha Purnima</td>
    <td class="border-2 text-white font-thin hover:font-bold">May 12, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Eid-ul-Adha (Bakrid)</td>
    <td class="border-2 text-white font-thin hover:font-bold">Jun 7, 2025 <em>(tentative)</em></td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Muharram</td>
    <td class="border-2 text-white font-thin hover:font-bold">Jul 6, 2025 <em>(tentative)</em></td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Independence Day / Janmashtami</td>
    <td class="border-2 text-white font-thin hover:font-bold">Aug 15–16, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Milad-un-Nabi</td>
    <td class="border-2 text-white font-thin hover:font-bold">Sep 5, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Dussehra / Gandhi Jayanti</td>
    <td class="border-2 text-white font-thin hover:font-bold">Oct 1–2, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Diwali</td>
    <td class="border-2 text-white font-thin hover:font-bold">Oct 20, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Chhath Puja</td>
    <td class="border-2 text-white font-thin hover:font-bold">Oct 28, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Guru Nanak Jayanti</td>
    <td class="border-2 text-white font-thin hover:font-bold">Nov 5, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Christmas Day</td>
    <td class="border-2 text-white font-thin hover:font-bold">Dec 25, 2025</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">All Sundays</td>
    <td class="border-2 text-white font-thin hover:font-bold">Weekly off</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">2nd & 4th Saturdays</td>
    <td class="border-2 text-white font-thin hover:font-bold">Monthly Weekly off</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
  <tr>
    <td class="border-2 text-white font-thin hover:font-bold">Seasonal Breaks (Summer / Winter)</td>
    <td class="border-2 text-white font-thin hover:font-bold">Varies by college/university</td>
    <td class="border-2 text-white font-thin hover:font-bold">Public</td>
  </tr>
</tbody>

      </table>
    </div>
</div>

  <!-- Right content (25%) -->
  <div class="bg-rose-600 text-white p-4 rounded flex flex-col">
    <h2 class="text-3xl font-bold mb-4">Upcoming Events</h2>
    <ul class="flex-1 overflow-y-auto max-h-96">
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>
        <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>  <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>  <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>  <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>  <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>  <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>  <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 1</li>
      <li class="font-bold border-2 border-amber-500 m-2 p-2 hover:bg-amber-500">Event 2</li>
    </ul>
  </div>
 
</section>





<?php
include("ImpLinks.php");
include("footer.php")
?>
