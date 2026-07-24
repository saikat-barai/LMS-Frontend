import { Link, useRouterState } from "@tanstack/react-router";
import { useEffect, useState } from "react";
import { AlignRight, GraduationCap, X } from "lucide-react";

const NAV = [
  { label: "Home", href: "/", hash: "" },
  { label: "Courses", href: "/", hash: "courses" },
  { label: "Learn", href: "/", hash: "featured" },
  { label: "Instructors", href: "/", hash: "instructors" },
  { label: "Exams", href: "/", hash: "exams" },
  { label: "E-Books", href: "/", hash: "ebooks" },
] as const;

function isActive(item: (typeof NAV)[number], pathname: string, hash: string) {
  if (pathname !== "/") return false;
  const current = hash.replace(/^#/, "");
  if (item.hash === "") return current === "";
  return current === item.hash;
}

export function Header() {
  const [open, setOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);
  const { pathname, hash } = useRouterState({
    select: (s) => ({
      pathname: s.location.pathname,
      hash: s.location.hash,
    }),
  });

  useEffect(() => {
    let ticking = false;
    const onScroll = () => {
      if (ticking) return;
      ticking = true;
      window.requestAnimationFrame(() => {
        setScrolled(window.scrollY > 16);
        ticking = false;
      });
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);

  useEffect(() => {
    setOpen(false);
  }, [pathname, hash]);

  return (
    <header
      className={`fixed inset-x-0 top-0 z-50 transition-[padding] duration-700 ease-[cubic-bezier(0.22,1,0.36,1)] ${
        scrolled ? "px-0 pt-0" : "px-3 pt-2 sm:px-5 sm:pt-3 lg:px-8"
      }`}
    >
      {/* 1240px → 100vw so width interpolates; radius stays px so corners ease soft */}
      <div
        className="mx-auto will-change-[max-width]"
        style={{
          maxWidth: scrolled ? "100vw" : "1240px",
          transition: "max-width 700ms cubic-bezier(0.22, 1, 0.36, 1)",
        }}
      >
        <div
          className={`flex items-center gap-2 overflow-hidden bg-white will-change-[border-radius] ${
            scrolled
              ? "border-b border-black/5 bg-white/90 px-4 py-3 shadow-[0_8px_30px_-12px_rgba(15,10,40,0.25)] backdrop-blur-xl sm:px-6 lg:px-10"
              : "px-3 py-2.5 shadow-[0_12px_40px_-12px_rgba(15,10,40,0.45)] sm:gap-3 sm:px-5 sm:py-3"
          }`}
          style={{
            borderRadius: scrolled ? 0 : 9999,
            /* scroll → radius instant cut; unscroll → soft pill return */
            transition: scrolled
              ? "border-radius 0ms, box-shadow 700ms cubic-bezier(0.22, 1, 0.36, 1), background-color 700ms ease, padding 700ms cubic-bezier(0.22, 1, 0.36, 1), backdrop-filter 700ms ease"
              : "border-radius 500ms cubic-bezier(0.22, 1, 0.36, 1), box-shadow 700ms cubic-bezier(0.22, 1, 0.36, 1), background-color 700ms ease, padding 700ms cubic-bezier(0.22, 1, 0.36, 1), backdrop-filter 700ms ease",
          }}
        >
          <div
            className={`flex w-full items-center gap-2 sm:gap-3 ${
              scrolled ? "mx-auto max-w-[1240px]" : ""
            }`}
          >
            <Link to="/" className="flex shrink-0 items-center gap-2.5">
              <span className="grid h-9 w-9 place-items-center rounded-full bg-[linear-gradient(135deg,#7c3aed_0%,#c026d3_100%)] text-white shadow-md sm:h-10 sm:w-10">
                <GraduationCap className="h-4 w-4 sm:h-5 sm:w-5" />
              </span>
              <span className="font-display text-base font-extrabold tracking-tight text-[#1a1230] sm:text-[17px]">
                EduSphere
              </span>
            </Link>

            <nav className="mx-auto hidden min-w-0 flex-1 items-center justify-center gap-0.5 lg:flex">
              {NAV.map((item) => {
                const active = isActive(item, pathname, hash);
                return (
                  <Link
                    key={item.label}
                    to={item.href}
                    hash={item.hash || undefined}
                    className={`relative shrink-0 rounded-full px-3.5 py-2 text-[15px] font-semibold transition-colors duration-300 sm:px-4 sm:text-base ${
                      active
                        ? "text-[#7c3aed]"
                        : "text-[#3d3554] hover:bg-[#f4f0ff] hover:text-[#1a1230]"
                    }`}
                  >
                    {item.label}
                    {active && (
                      <span
                        aria-hidden
                        className="absolute inset-x-3 -bottom-0.5 h-[3px] rounded-full bg-[linear-gradient(90deg,#7c3aed,#e879f9,#fb7185)]"
                      />
                    )}
                  </Link>
                );
              })}
            </nav>

            <div className="ml-auto flex shrink-0 items-center gap-1.5">
              <button className="hidden h-9 items-center rounded-full bg-[linear-gradient(105deg,#7c3aed_0%,#d946ef_55%,#fb7185_100%)] px-5 text-sm font-semibold text-white shadow-[0_8px_20px_-6px_rgba(168,85,247,0.65)] transition-transform duration-300 hover:-translate-y-0.5 lg:inline-flex sm:h-10 sm:px-6 sm:text-[15px]">
                Login
              </button>
              <button
                aria-label={open ? "Close menu" : "Open menu"}
                aria-expanded={open}
                onClick={() => setOpen((v) => !v)}
                className="grid h-9 w-9 place-items-center rounded-full bg-[#f4f0ff] text-[#5b21b6] transition-colors hover:bg-[#ede9fe] lg:hidden sm:h-10 sm:w-10"
              >
                {open ? (
                  <X className="h-5 w-5" strokeWidth={2.25} />
                ) : (
                  <AlignRight className="h-5 w-5" strokeWidth={2.25} />
                )}
              </button>
            </div>
          </div>
        </div>

        {open && (
          <div
            className={`mt-2 overflow-hidden border border-white/40 bg-white/95 shadow-lg backdrop-blur-md lg:hidden ${
              scrolled ? "mx-3 rounded-2xl sm:mx-5" : "rounded-3xl"
            }`}
          >
            <nav className="flex flex-col p-2">
              {NAV.map((item) => {
                const active = isActive(item, pathname, hash);
                return (
                  <Link
                    key={item.label}
                    to={item.href}
                    hash={item.hash || undefined}
                    onClick={() => setOpen(false)}
                    className={`rounded-2xl px-4 py-3 text-base font-semibold ${
                      active
                        ? "bg-[#f3e8ff] text-[#7c3aed]"
                        : "text-[#2a2438] hover:bg-[#f4f0ff]"
                    }`}
                  >
                    {item.label}
                  </Link>
                );
              })}
              <div className="mt-1 border-t border-black/5 p-2 pt-3">
                <button
                  onClick={() => setOpen(false)}
                  className="inline-flex h-11 w-full items-center justify-center rounded-full bg-[linear-gradient(105deg,#7c3aed_0%,#d946ef_55%,#fb7185_100%)] text-[15px] font-semibold text-white shadow-[0_8px_20px_-6px_rgba(168,85,247,0.65)]"
                >
                  Login
                </button>
              </div>
            </nav>
          </div>
        )}
      </div>
    </header>
  );
}
