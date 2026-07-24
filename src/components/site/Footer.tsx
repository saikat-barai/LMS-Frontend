import { GraduationCap, Facebook, Twitter, Youtube, Instagram, Mail } from "lucide-react";

const COLS = [
  {
    title: "Learn",
    links: ["Courses", "Live Classes", "Instructors", "E-Books", "Exams"],
  },
  {
    title: "Company",
    links: ["About", "Careers", "Press", "Blog", "Contact"],
  },
  {
    title: "Support",
    links: ["Help Center", "Community", "Terms", "Privacy", "Refund Policy"],
  },
];

export function Footer() {
  return (
    <footer className="mt-24 border-t border-border bg-surface">
      <div className="container-lms py-16">
        <div className="grid gap-12 lg:grid-cols-[1.4fr_repeat(3,1fr)_1.2fr]">
          <div>
            <div className="flex items-center gap-2">
              <span className="grid h-9 w-9 place-items-center rounded-xl bg-primary-gradient text-primary-foreground">
                <GraduationCap className="h-5 w-5" />
              </span>
              <span className="font-display text-lg font-extrabold">
                Edu<span className="gradient-text">Sphere</span>
              </span>
            </div>
            <p className="mt-4 max-w-xs text-sm leading-relaxed text-muted-foreground">
              A modern learning platform built for ambitious learners and world-class educators.
            </p>
            <div className="mt-5 flex gap-2">
              {[Facebook, Twitter, Instagram, Youtube].map((Icon, i) => (
                <a
                  key={i}
                  href="#"
                  className="grid h-9 w-9 place-items-center rounded-full border border-border text-muted-foreground transition-colors hover:border-primary hover:text-primary"
                >
                  <Icon className="h-4 w-4" />
                </a>
              ))}
            </div>
          </div>

          {COLS.map((col) => (
            <div key={col.title}>
              <h4 className="text-sm font-semibold text-foreground">{col.title}</h4>
              <ul className="mt-4 space-y-2.5">
                {col.links.map((l) => (
                  <li key={l}>
                    <a href="#" className="text-sm text-muted-foreground transition-colors hover:text-foreground">
                      {l}
                    </a>
                  </li>
                ))}
              </ul>
            </div>
          ))}

          <div>
            <h4 className="text-sm font-semibold text-foreground">Newsletter</h4>
            <p className="mt-4 text-sm text-muted-foreground">
              Get weekly learning tips and new course drops.
            </p>
            <form className="mt-4 flex items-center gap-2 rounded-full border border-border bg-background p-1 pl-4 focus-within:border-primary">
              <Mail className="h-4 w-4 text-muted-foreground" />
              <input
                type="email"
                placeholder="you@email.com"
                className="min-w-0 flex-1 bg-transparent py-2 text-sm outline-none placeholder:text-muted-foreground"
              />
              <button
                type="submit"
                className="rounded-full bg-primary-gradient px-4 py-2 text-xs font-semibold text-primary-foreground"
              >
                Join
              </button>
            </form>
          </div>
        </div>

        <div className="mt-12 flex flex-col items-center justify-between gap-3 border-t border-border pt-6 sm:flex-row">
          <p className="text-xs text-muted-foreground">© {new Date().getFullYear()} EduSphere. All rights reserved.</p>
          <p className="text-xs text-muted-foreground">Crafted with care for learners worldwide.</p>
        </div>
      </div>
    </footer>
  );
}
