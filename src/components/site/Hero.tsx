import { useEffect, useState } from "react";
import {
  ArrowRight,
  ChevronLeft,
  ChevronRight,
  GraduationCap,
  LineChart,
  Play,
  Sparkles,
  Star,
} from "lucide-react";
import sscImg from "@/assets/course-ssc-batch.jpg";
import hscImg from "@/assets/course-hsc-batch.jpg";
import admissionImg from "@/assets/course-admission-batch.jpg";
import skillsImg from "@/assets/course-skills-batch.jpg";

const FEATURES = [
  {
    icon: GraduationCap,
    title: "Expert Instructors",
    desc: "Learn from the best",
    tone: "from-[#7c3aed] to-[#a855f7]",
  },
  {
    icon: Star,
    title: "Live & Recorded Classes",
    desc: "Study anytime",
    tone: "from-[#ec4899] to-[#f97316]",
  },
  {
    icon: LineChart,
    title: "Track Your Progress",
    desc: "Stay motivated",
    tone: "from-[#8b5cf6] to-[#6366f1]",
  },
] as const;

const COURSES = [
  { id: "ssc", title: "SSC Batch", image: sscImg },
  { id: "hsc", title: "HSC Batch", image: hscImg },
  { id: "admission", title: "Admission Batch", image: admissionImg },
  { id: "skills", title: "Skills Batch", image: skillsImg },
] as const;

const AUTO_MS = 7500;

export function Hero() {
  const [active, setActive] = useState(0);
  const last = COURSES.length - 1;

  const goPrev = () => setActive((i) => (i === 0 ? last : i - 1));
  const goNext = () => setActive((i) => (i === last ? 0 : i + 1));

  useEffect(() => {
    const id = window.setInterval(goNext, AUTO_MS);
    return () => window.clearInterval(id);
  }, [active]);

  return (
    <section className="relative flex min-h-svh w-full flex-col overflow-hidden bg-[linear-gradient(160deg,#0b0618_0%,#1a0b2e_42%,#2a1250_72%,#1e0a36_100%)] text-white">
      <div className="pointer-events-none absolute inset-0">
        <div className="absolute -left-24 top-24 h-80 w-80 rounded-full bg-[#7c3aed]/25 blur-[100px]" />
        <div className="absolute right-0 top-10 h-96 w-96 rounded-full bg-[#db2777]/20 blur-[120px]" />
        <div className="absolute bottom-0 left-1/3 h-72 w-72 rounded-full bg-[#6366f1]/20 blur-[100px]" />
        <div className="absolute inset-x-0 bottom-0 h-48 bg-[radial-gradient(ellipse_at_bottom,rgba(124,58,237,0.35),transparent_70%)]" />
      </div>

      <div className="relative flex min-h-svh w-full flex-col pt-[4.25rem] sm:pt-[4.75rem]">
        <div className="container-lms flex flex-1 items-center py-8">
          <div className="grid w-full items-center gap-10 lg:grid-cols-[1fr_1.05fr] lg:gap-12">
            {/* LEFT — center on mobile, left on lg+ */}
            <div className="flex flex-col items-center text-center animate-in fade-in slide-in-from-left-4 duration-700 lg:items-start lg:text-left">
              <span className="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/5 px-3.5 py-1.5 text-xs font-medium text-white/85 backdrop-blur-md">
                <Sparkles className="h-3.5 w-3.5 text-[#fbbf24]" />
                New batches enrolling now
              </span>

              <h1 className="mt-5 font-display text-[2.25rem] font-extrabold leading-[1.08] tracking-tight sm:text-4xl lg:text-[3rem]">
                Learn{" "}
                <span className="bg-[linear-gradient(90deg,#c4b5fd_0%,#818cf8_100%)] bg-clip-text text-transparent">
                  Smarter.
                </span>
                <br />
                Achieve{" "}
                <span className="bg-[linear-gradient(90deg,#fb7185_0%,#f97316_100%)] bg-clip-text text-transparent">
                  Faster.
                </span>
              </h1>

              <p className="mt-4 max-w-md text-sm leading-relaxed text-white/65 sm:text-[15px]">
                A modern Learning Management System for students and educators —
                live classes, expert mentors, and progress that actually sticks.
              </p>

              <div className="mt-7 flex flex-wrap items-center justify-center gap-3 lg:justify-start">
                <a
                  href="#courses"
                  className="group inline-flex items-center gap-2 rounded-full bg-[linear-gradient(105deg,#7c3aed_0%,#d946ef_50%,#fb7185_100%)] px-5 py-3 text-sm font-semibold text-white shadow-[0_12px_32px_-10px_rgba(192,38,211,0.7)] transition-transform hover:-translate-y-0.5"
                >
                  Explore Courses
                  <ArrowRight className="h-4 w-4 transition-transform group-hover:translate-x-0.5" />
                </a>
                <a
                  href="#featured"
                  className="inline-flex items-center gap-2 rounded-full border border-white/25 bg-white/5 px-5 py-3 text-sm font-semibold text-white backdrop-blur transition-colors hover:bg-white/10"
                >
                  <span className="grid h-5 w-5 place-items-center rounded-full border border-white/40">
                    <Play className="h-2.5 w-2.5 fill-current" />
                  </span>
                  Watch Intro
                </a>
              </div>

              <div className="mt-9 grid w-full gap-5 text-left sm:grid-cols-3">
                {FEATURES.map((f) => (
                  <div key={f.title} className="flex items-start gap-3">
                    <span
                      className={`mt-0.5 grid h-9 w-9 shrink-0 place-items-center rounded-full bg-linear-to-br ${f.tone} text-white shadow-[0_8px_20px_-8px_rgba(168,85,247,0.8)]`}
                    >
                      <f.icon className="h-4 w-4" />
                    </span>
                    <div>
                      <div className="text-sm font-semibold text-white">{f.title}</div>
                      <div className="mt-0.5 text-xs text-white/50">{f.desc}</div>
                    </div>
                  </div>
                ))}
              </div>
            </div>

            {/* RIGHT — height = image auto */}
            <div className="relative w-full animate-in fade-in slide-in-from-right-4 duration-700">
              <div className="pointer-events-none absolute -inset-10 -z-10 rounded-full bg-[radial-gradient(circle_at_center,rgba(192,38,211,0.4),transparent_65%)] blur-3xl" />

              <div className="relative w-full overflow-hidden rounded-3xl shadow-[0_28px_60px_-24px_rgba(0,0,0,0.7)]">
                {COURSES.map((item, i) => {
                  const isActive = i === active;
                  return (
                    <img
                      key={item.id}
                      src={item.image}
                      alt={item.title}
                      width={1200}
                      height={900}
                      className={`w-full transition-all duration-[1100ms] ease-[cubic-bezier(0.22,1,0.36,1)] ${
                        isActive
                          ? "relative z-10 scale-100 opacity-100"
                          : "absolute inset-0 z-0 h-full scale-[1.04] object-cover opacity-0"
                      }`}
                    />
                  );
                })}
              </div>

              {/* dots + small arrows — under image only, no overlay on art */}
              <div className="mt-4 flex items-center justify-center gap-3">
                <button
                  type="button"
                  aria-label="Previous course"
                  onClick={goPrev}
                  className="grid h-7 w-7 place-items-center rounded-full border border-white/20 bg-white/5 text-white/75 backdrop-blur-sm transition-colors hover:border-white/35 hover:bg-white/12 hover:text-white"
                >
                  <ChevronLeft className="h-3.5 w-3.5" strokeWidth={2.5} />
                </button>

                <div className="flex items-center gap-2.5">
                  {COURSES.map((item, i) => (
                    <button
                      key={item.id}
                      type="button"
                      aria-label={`Show ${item.title}`}
                      onClick={() => setActive(i)}
                      className={`h-2 rounded-full transition-all duration-500 ease-out ${
                        i === active
                          ? "w-7 bg-[linear-gradient(90deg,#a855f7,#f472b6)] shadow-[0_0_12px_rgba(244,114,182,0.55)]"
                          : "w-2 bg-white/30 hover:bg-white/55"
                      }`}
                    />
                  ))}
                </div>

                <button
                  type="button"
                  aria-label="Next course"
                  onClick={goNext}
                  className="grid h-7 w-7 place-items-center rounded-full border border-white/20 bg-white/5 text-white/75 backdrop-blur-sm transition-colors hover:border-white/35 hover:bg-white/12 hover:text-white"
                >
                  <ChevronRight className="h-3.5 w-3.5" strokeWidth={2.5} />
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
