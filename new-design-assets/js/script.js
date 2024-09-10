// Toggle see more and see less button script starts
const ps = document.querySelectorAll('.review-description');
const observer = new ResizeObserver(entries => {
  for (let entry of entries) {
    entry.target.classList[entry.target.scrollHeight > entry.contentRect.height ? 'add' : 'remove']('truncated');
  }
});

ps.forEach(p => {
  observer.observe(p);
});

// Toggle see more and see less button script ends