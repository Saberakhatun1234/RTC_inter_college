document.addEventListener("DOMContentLoaded", () => {
  const counters = [
    { id: "counter-students", value: data.students },
    { id: "counter-faculties", value: data.faculties },
    { id: "counter-courses", value: data.courses },
  ];

  counters.forEach((counter) => {
    let current = 0;
    const speed = 30;
    const increment = Math.ceil(counter.value / 100);

    const update = () => {
      current += increment;
      if (current > counter.value) current = counter.value;
      document.getElementById(counter.id).textContent = current;
      if (current < counter.value) setTimeout(update, speed);
    };

    update();
  });
});
