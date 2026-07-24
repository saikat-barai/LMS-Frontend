import { createFileRoute } from "@tanstack/react-router";
import {
  ArrowRight,
  Award,
  BookOpen,
  Calculator,
  Code2,
  FlaskConical,
  GraduationCap,
  Heart,
  LayoutGrid,
  Play,
  PlayCircle,
  ShieldCheck,
  Sparkles,
  Star,
  Users,
  Video,
} from "lucide-react";
import { Header } from "@/components/site/Header";
import { Hero } from "@/components/site/Hero";
import { Footer } from "@/components/site/Footer";
import featuredSsc from "@/assets/featured-ssc.jpg";
import featuredHsc from "@/assets/featured-hsc-physics.jpg";
import featuredAdmission from "@/assets/featured-admission.jpg";
import instructorNiaz from "@/assets/instructor-niaz.jpg";
import instructorRafiul from "@/assets/instructor-rafiul.jpg";
import instructorTeam from "@/assets/instructor-team.jpg";

export const Route = createFileRoute("/")({
  component: Home,
});

const CATEGORIES = [
  {
    icon: GraduationCap,
    title: "Academic",
    desc: "Class 6–12 full curriculum with live + recorded classes.",
    courses: 24,
    glow: "from-[#7c3aed]/20 via-[#a855f7]/8 to-transparent",
    iconGrad: "from-[#7c3aed] to-[#c026d3]",
    accent: "text-[#7c3aed]",
    hover: "hover:border-[#7c3aed]/45 hover:shadow-[0_24px_55px_-20px_rgba(124,58,237,0.55)]",
  },
  {
    icon: BookOpen,
    title: "Admission",
    desc: "University admission prep that actually sticks.",
    courses: 12,
    glow: "from-[#f97316]/18 via-[#fb7185]/8 to-transparent",
    iconGrad: "from-[#f97316] to-[#fb7185]",
    accent: "text-[#ea580c]",
    hover: "hover:border-[#fb7185]/50 hover:shadow-[0_24px_55px_-20px_rgba(249,115,22,0.45)]",
  },
  {
    icon: Calculator,
    title: "Mathematics",
    desc: "Advanced math & problem solving.",
    courses: 18,
    glow: "from-[#d946ef]/18 via-[#e879f9]/8 to-transparent",
    iconGrad: "from-[#d946ef] to-[#e879f9]",
    accent: "text-[#c026d3]",
    hover: "hover:border-[#d946ef]/45 hover:shadow-[0_24px_55px_-20px_rgba(217,70,239,0.5)]",
  },
  {
    icon: FlaskConical,
    title: "Science",
    desc: "Physics, chemistry & biology.",
    courses: 15,
    glow: "from-[#14b8a6]/18 via-[#2dd4bf]/8 to-transparent",
    iconGrad: "from-[#0d9488] to-[#2dd4bf]",
    accent: "text-[#0f766e]",
    hover: "hover:border-[#14b8a6]/45 hover:shadow-[0_24px_55px_-20px_rgba(20,184,166,0.45)]",
  },
  {
    icon: Code2,
    title: "Technology",
    desc: "Programming & modern tools.",
    courses: 10,
    glow: "from-[#6366f1]/18 via-[#818cf8]/8 to-transparent",
    iconGrad: "from-[#4f46e5] to-[#818cf8]",
    accent: "text-[#4f46e5]",
    hover: "hover:border-[#6366f1]/45 hover:shadow-[0_24px_55px_-20px_rgba(99,102,241,0.5)]",
  },
  {
    icon: Users,
    title: "Community",
    desc: "Peer learning & mentorship.",
    courses: 8,
    glow: "from-[#f43f5e]/18 via-[#fb7185]/8 to-transparent",
    iconGrad: "from-[#e11d48] to-[#fb7185]",
    accent: "text-[#e11d48]",
    hover: "hover:border-[#f43f5e]/45 hover:shadow-[0_24px_55px_-20px_rgba(244,63,94,0.45)]",
  },
] as const;

const COURSES = [
  {
    tag: "Best Seller",
    title: "SSC-27 Full Prep 2.0",
    inst: "Niaz Morshed Faysal",
    role: "SSC Mentor",
    avatar: instructorNiaz,
    price: 3499,
    old: 4999,
    rating: 4.9,
    students: 12480,
    level: "Beginner → Advanced",
    image: featuredSsc,
  },
  {
    tag: "New",
    title: "HSC Physics Master Class",
    inst: "Dr. Rafiul Alam",
    role: "Physics Expert",
    avatar: instructorRafiul,
    price: 2799,
    old: 3499,
    rating: 4.8,
    students: 8620,
    level: "Intermediate",
    image: featuredHsc,
  },
  {
    tag: "Popular",
    title: "University Admission Combo",
    inst: "Team EduSphere",
    role: "Admission Mentors",
    avatar: instructorTeam,
    price: 5299,
    old: 6999,
    rating: 4.9,
    students: 21030,
    level: "Advanced",
    image: featuredAdmission,
  },
] as const;

const STATS = [
  { icon: Users, value: "258,541+", label: "Active Students" },
  { icon: PlayCircle, value: "65", label: "Premium Courses" },
  { icon: Award, value: "28", label: "Expert Teachers" },
  { icon: Video, value: "4,700+", label: "Video Lessons" },
];

const FEATURES = [
  { icon: Video, title: "HD Live Classes", desc: "Interactive live sessions with real-time doubt solving." },
  { icon: BookOpen, title: "Structured Curriculum", desc: "Carefully sequenced lessons designed by exam toppers." },
  { icon: ShieldCheck, title: "Verified Instructors", desc: "Learn from vetted, top-rated subject experts." },
  { icon: Award, title: "Certificates", desc: "Earn shareable certificates on course completion." },
];

const INSTRUCTORS = [
  { name: "Niaz M. Faysal", role: "Physics · SSC/HSC", initials: "NF" },
  { name: "Rafiul Alam", role: "Mathematics", initials: "RA" },
  { name: "Sadia Rahman", role: "Chemistry", initials: "SR" },
  { name: "Tanvir Hasan", role: "ICT & Programming", initials: "TH" },
];

const TESTIMONIALS = [
  { name: "Ayesha Siddika", role: "HSC 2025", text: "The live classes and notes are top-tier. I improved my scores by two whole grades in three months." },
  { name: "Mahin Rahman", role: "Admission Candidate", text: "Best combo package I've bought. Instructors explain concepts so clearly." },
  { name: "Rakib Hossain", role: "SSC Batch", text: "Clean app, super smooth videos, and doubt solving is fast. Highly recommended." },
];

function Home() {
  return (
    <div className="min-h-screen bg-background text-foreground">
      <Header />

      <div className="relative">
        <Hero />
      </div>

      {/* CATEGORIES */}
      <section id="ebooks" className="relative overflow-hidden bg-soft-gradient py-14 md:py-16 lg:py-20">
        <div className="pointer-events-none absolute -left-20 top-16 h-64 w-64 rounded-full bg-primary/8 blur-[80px]" />
        <div className="pointer-events-none absolute -right-12 bottom-8 h-72 w-72 rounded-full bg-primary-glow/10 blur-[90px]" />
        <div className="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/25 to-transparent" />

        <div className="container-lms relative">
          <SectionHeader
            title={
              <>
                Find your{" "}
                <span className="bg-[linear-gradient(90deg,#7c3aed_0%,#6366f1_100%)] bg-clip-text text-transparent">
                  learning
                </span>{" "}
                path
              </>
            }
            subtitle="Explore curated tracks designed for every stage of your academic journey."
          />

          <div className="mt-8 grid gap-5 sm:grid-cols-2 md:mt-10 lg:grid-cols-3">
            {CATEGORIES.map((c) => (
              <a
                key={c.title}
                href="#courses"
                className={`group relative flex min-h-[200px] flex-col overflow-hidden rounded-[1.35rem] border border-border bg-card/90 p-5 shadow-soft backdrop-blur-sm transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] hover:-translate-y-1.5 sm:p-6 ${c.hover}`}
              >
                <div
                  className={`pointer-events-none absolute inset-0 bg-gradient-to-br ${c.glow} opacity-60 transition-opacity duration-500 group-hover:opacity-100`}
                />
                <div className="pointer-events-none absolute -right-8 -top-8 h-28 w-28 rounded-full bg-card/60 blur-2xl transition-transform duration-700 group-hover:scale-125" />

                <div className="relative flex h-full flex-col">
                  <div className="flex items-start justify-between gap-3">
                    <span
                      className={`grid h-11 w-11 place-items-center rounded-2xl bg-gradient-to-br text-white shadow-[0_12px_28px_-10px_rgba(124,58,237,0.45)] transition-transform duration-500 group-hover:scale-110 ${c.iconGrad}`}
                    >
                      <c.icon className="h-5 w-5" />
                    </span>
                    <span className="rounded-full border border-[#7c3aed]/25 bg-[#7c3aed]/10 px-2.5 py-1 text-[11px] font-semibold tracking-wide text-[#7c3aed]">
                      {c.courses} courses
                    </span>
                  </div>

                  <h3 className="mt-5 font-display text-lg font-extrabold tracking-tight text-foreground">
                    {c.title}
                  </h3>
                  <p className="mt-2 text-sm leading-relaxed text-muted-foreground">{c.desc}</p>

                  <div
                    className={`mt-auto inline-flex items-center gap-1.5 pt-6 text-sm font-semibold ${c.accent}`}
                  >
                    Explore
                    <ArrowRight className="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" />
                  </div>
                </div>
              </a>
            ))}
          </div>
        </div>
      </section>

      {/* FEATURED COURSES */}
      <section id="courses" className="relative overflow-hidden bg-surface py-14 md:py-16 lg:py-20">
        <div className="pointer-events-none absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-primary/20 to-transparent" />
        <div className="pointer-events-none absolute -right-24 top-24 h-72 w-72 rounded-full bg-primary/6 blur-[90px]" />
        <div className="pointer-events-none absolute -left-16 bottom-10 h-64 w-64 rounded-full bg-primary-glow/8 blur-[80px]" />

        <div className="container-lms relative">
          <div className="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
            <SectionHeader
              align="left"
              title={
                <>
                  Discover our{" "}
                  <span className="bg-[linear-gradient(90deg,#7c3aed_0%,#6366f1_100%)] bg-clip-text text-transparent">
                    top courses
                  </span>
                </>
              }
              subtitle="Hand-picked programs loved by thousands of learners."
            />
            <a
              href="#"
              className="hidden shrink-0 items-center gap-2 rounded-full border border-[#7c3aed]/20 bg-white px-5 py-2.5 text-sm font-semibold text-[#7c3aed] shadow-[0_8px_24px_-12px_rgba(124,58,237,0.35)] transition-all hover:-translate-y-0.5 hover:border-[#7c3aed]/40 hover:shadow-[0_14px_32px_-12px_rgba(124,58,237,0.45)] sm:inline-flex"
            >
              View all
              <ArrowRight className="h-4 w-4" />
            </a>
          </div>

          <div className="mt-8 grid gap-5 sm:grid-cols-2 md:mt-10 lg:grid-cols-3 lg:gap-6">
            {COURSES.map((c) => (
              <article
                key={c.title}
                className="group flex flex-col overflow-hidden rounded-[1.35rem] border border-border bg-card shadow-soft transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] hover:-translate-y-1.5 hover:border-[#7c3aed]/25 hover:shadow-[0_28px_60px_-24px_rgba(124,58,237,0.4)]"
              >
                <div className="relative aspect-[16/10] overflow-hidden">
                  <img
                    src={c.image}
                    alt={c.title}
                    className="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-[1.06]"
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-[#0b0618]/70 via-[#0b0618]/15 to-transparent" />

                  <div className="absolute left-3 top-3 rounded-full bg-white/95 px-3 py-1 text-[11px] font-bold text-[#7c3aed] shadow-sm backdrop-blur sm:left-4 sm:top-4">
                    {c.tag}
                  </div>
                  <div className="absolute right-3 top-3 max-w-[45%] truncate rounded-full bg-black/40 px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wider text-white backdrop-blur sm:right-4 sm:top-4 sm:max-w-none">
                    {c.level}
                  </div>

                  <div className="absolute inset-0 grid place-items-center">
                    <span className="grid h-12 w-12 place-items-center rounded-full bg-white/95 text-[#7c3aed] shadow-[0_12px_30px_-8px_rgba(0,0,0,0.45)] ring-4 ring-white/25 transition-transform duration-500 group-hover:scale-110 sm:h-14 sm:w-14">
                      <Play className="h-4 w-4 fill-current sm:h-5 sm:w-5" />
                    </span>
                  </div>
                </div>

                <div className="flex flex-1 flex-col p-4 sm:p-5 lg:p-6">
                  <div className="inline-flex w-fit items-center gap-1.5 rounded-full bg-[#f4f0ff] px-2.5 py-1">
                    <Star className="h-3.5 w-3.5 fill-[color:var(--warning)] text-[color:var(--warning)]" />
                    <span className="text-xs font-bold text-[#1a1230]">{c.rating}</span>
                    <span className="text-xs text-muted-foreground">
                      · {c.students.toLocaleString()} students
                    </span>
                  </div>

                  <h3 className="mt-3 line-clamp-2 font-display text-base font-extrabold leading-snug tracking-tight text-[#1a1230] sm:text-lg">
                    {c.title}
                  </h3>

                  <div className="mt-3 flex items-center gap-2.5">
                    <img
                      src={c.avatar}
                      alt={c.inst}
                      className="h-8 w-8 shrink-0 rounded-full object-cover ring-2 ring-[#7c3aed]/15 ring-offset-1 ring-offset-card"
                    />
                    <div className="min-w-0">
                      <div className="truncate text-sm font-semibold text-foreground">{c.inst}</div>
                      <div className="truncate text-xs text-muted-foreground">{c.role}</div>
                    </div>
                  </div>

                  <div className="mt-auto pt-4 sm:pt-5">
                    <div className="mb-4 h-px w-full bg-gradient-to-r from-transparent via-[#7c3aed]/20 to-transparent" />
                    <div className="flex items-center justify-between gap-3">
                      <div className="min-w-0">
                        <span className="text-lg font-extrabold text-foreground">৳{c.price}</span>
                        <span className="ml-2 text-sm text-muted-foreground line-through">৳{c.old}</span>
                      </div>
                      <button
                        type="button"
                        className="inline-flex shrink-0 items-center gap-1.5 rounded-full bg-[linear-gradient(105deg,#7c3aed_0%,#d946ef_55%,#fb7185_100%)] px-4 py-2 text-xs font-semibold text-white shadow-[0_10px_24px_-8px_rgba(192,38,211,0.65)] transition-all hover:-translate-y-0.5 hover:shadow-[0_14px_28px_-8px_rgba(192,38,211,0.75)] sm:px-5 sm:text-[13px]"
                      >
                        Enroll
                        <ArrowRight className="h-3.5 w-3.5" />
                      </button>
                    </div>
                  </div>
                </div>
              </article>
            ))}
          </div>

          <div className="mt-6 flex justify-center sm:hidden">
            <a
              href="#"
              className="inline-flex items-center gap-2 rounded-full border border-[#7c3aed]/25 bg-white px-5 py-2.5 text-sm font-semibold text-[#7c3aed] shadow-[0_8px_24px_-12px_rgba(124,58,237,0.35)]"
            >
              View all courses
              <ArrowRight className="h-4 w-4" />
            </a>
          </div>
        </div>
      </section>

      {/* BATCHES + STATS */}
      <section className="container-lms py-24">
        <div className="grid gap-6 lg:grid-cols-2">
          <Card>
            <Badge>Online Course</Badge>
            <h3 className="mt-4 font-display text-2xl font-extrabold sm:text-3xl">
              Online batches are ongoing!
            </h3>
            <p className="mt-1 text-sm font-medium text-primary">Book your seat now!</p>
            <div className="mt-6 space-y-3">
              {[
                { icon: BookOpen, title: "Class 9, 10", sub: "SSC Preparation" },
                { icon: GraduationCap, title: "College", sub: "HSC Preparation" },
              ].map((b) => (
                <a
                  key={b.title}
                  href="#"
                  className="group flex items-center gap-4 rounded-xl border border-border bg-background p-4 transition-all hover:-translate-y-0.5 hover:border-primary hover:shadow-soft"
                >
                  <span className="grid h-11 w-11 place-items-center rounded-lg bg-primary-gradient text-primary-foreground shadow-soft">
                    <b.icon className="h-5 w-5" />
                  </span>
                  <div className="min-w-0">
                    <div className="font-semibold text-foreground">{b.title}</div>
                    <div className="text-xs text-muted-foreground">{b.sub}</div>
                  </div>
                  <ArrowRight className="ml-auto h-4 w-4 text-muted-foreground transition-transform group-hover:translate-x-1 group-hover:text-primary" />
                </a>
              ))}
            </div>
            <a href="#" className="mt-6 inline-flex items-center gap-1.5 text-sm font-semibold text-primary">
              See All Courses <ArrowRight className="h-4 w-4" />
            </a>
          </Card>

          <Card>
            <Badge tone="accent">Trust & Numbers</Badge>
            <h3 className="mt-4 font-display text-2xl font-extrabold sm:text-3xl">See the stats!</h3>
            <p className="mt-1 text-sm font-medium text-[color:var(--secondary-foreground)]/70">The trust we are building.</p>
            <div className="mt-6 grid grid-cols-2 gap-3">
              {STATS.map((s) => (
                <div
                  key={s.label}
                  className="flex items-center gap-3 rounded-xl border border-border bg-background p-4 transition-all hover:-translate-y-0.5 hover:shadow-soft"
                >
                  <span className="grid h-11 w-11 place-items-center rounded-lg bg-gradient-to-br from-[color:var(--primary)] to-[color:var(--primary-glow)] text-primary-foreground shadow-soft">
                    <s.icon className="h-5 w-5" />
                  </span>
                  <div className="min-w-0">
                    <div className="text-lg font-extrabold text-foreground">{s.value}</div>
                    <div className="text-xs text-muted-foreground">{s.label}</div>
                  </div>
                </div>
              ))}
            </div>
          </Card>
        </div>
      </section>

      {/* FEATURES */}
      <section id="featured" className="relative bg-surface py-24">
        <div className="container-lms">
          <SectionHeader
            eyebrow="Why EduSphere"
            title="Everything you need to succeed"
            subtitle="Powerful learning tools packed into one seamless experience."
          />
          <div className="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            {FEATURES.map((f, i) => (
              <div
                key={f.title}
                className="group relative overflow-hidden rounded-2xl border border-border bg-card p-6 transition-all hover:-translate-y-1 hover:shadow-elegant"
              >
                <div className="pointer-events-none absolute -right-8 -top-8 h-24 w-24 rounded-full bg-primary-gradient opacity-0 blur-2xl transition-opacity group-hover:opacity-30" />
                <span className="relative inline-grid h-12 w-12 place-items-center rounded-xl bg-primary-gradient text-primary-foreground shadow-soft">
                  <f.icon className="h-5 w-5" />
                </span>
                <h4 className="relative mt-5 text-base font-bold">{f.title}</h4>
                <p className="relative mt-1.5 text-sm leading-relaxed text-muted-foreground">{f.desc}</p>
                <div className="relative mt-4 text-[11px] font-semibold uppercase tracking-wider text-muted-foreground">
                  0{i + 1}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* INSTRUCTORS */}
      <section id="instructors" className="container-lms py-24">
        <SectionHeader
          eyebrow="Meet Our Instructors"
          title="Learn from the best"
          subtitle="Top-rated educators with proven results and years of experience."
        />
        <div className="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
          {INSTRUCTORS.map((i) => (
            <div key={i.name} className="group">
              <div className="relative mx-auto aspect-square w-full overflow-hidden rounded-2xl bg-primary-gradient shadow-soft transition-transform group-hover:-translate-y-1">
                <div className="absolute inset-0 opacity-30 [background:radial-gradient(circle_at_30%_20%,white,transparent_55%)]" />
                <div className="absolute inset-0 grid place-items-center font-display text-5xl font-extrabold text-white/95">
                  {i.initials}
                </div>
                <div className="absolute inset-x-0 bottom-0 flex justify-center gap-2 p-3 opacity-0 transition-opacity group-hover:opacity-100">
                  <span className="rounded-full bg-white/20 px-3 py-1 text-xs font-semibold text-white backdrop-blur">
                    View Profile
                  </span>
                </div>
              </div>
              <h4 className="mt-4 text-base font-bold">{i.name}</h4>
              <p className="text-sm text-muted-foreground">{i.role}</p>
            </div>
          ))}
        </div>
      </section>

      {/* TESTIMONIALS */}
      <section id="exams" className="bg-surface py-24">
        <div className="container-lms">
          <SectionHeader
            eyebrow="Student Stories"
            title="Loved by learners everywhere"
            subtitle="Real results from students who chose EduSphere."
          />
          <div className="mt-12 grid gap-6 md:grid-cols-3">
            {TESTIMONIALS.map((t) => (
              <div key={t.name} className="relative rounded-2xl border border-border bg-card p-7 shadow-soft transition-all hover:-translate-y-1 hover:shadow-elegant">
                <div className="absolute -top-3 left-6 grid h-8 w-8 place-items-center rounded-full bg-primary-gradient text-lg font-bold text-primary-foreground shadow-soft">
                  “
                </div>
                <div className="flex items-center gap-1 text-[color:var(--warning)]">
                  {Array.from({ length: 5 }).map((_, i) => (
                    <Star key={i} className="h-4 w-4 fill-current" />
                  ))}
                </div>
                <p className="mt-4 text-sm leading-relaxed text-foreground/90">"{t.text}"</p>
                <div className="mt-6 flex items-center gap-3 border-t border-border pt-4">
                  <span className="grid h-10 w-10 place-items-center rounded-full bg-primary-gradient text-sm font-bold text-primary-foreground">
                    {t.name[0]}
                  </span>
                  <div>
                    <div className="text-sm font-semibold">{t.name}</div>
                    <div className="text-xs text-muted-foreground">{t.role}</div>
                  </div>
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA */}
      <section className="container-lms py-24">
        <div className="relative overflow-hidden rounded-3xl bg-hero-gradient p-10 text-white shadow-elegant sm:p-14">
          <div className="absolute inset-0 bg-mesh opacity-80" />
          <div className="absolute -right-16 -top-16 h-72 w-72 rounded-full bg-[oklch(0.66_0.22_328)]/30 blur-3xl" />
          <div className="absolute -bottom-16 -left-16 h-72 w-72 rounded-full bg-[oklch(0.82_0.15_78)]/25 blur-3xl" />
          <div className="relative grid gap-8 lg:grid-cols-[1.4fr_1fr] lg:items-center">
            <div>
              <span className="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-medium backdrop-blur">
                <Heart className="h-3.5 w-3.5 text-[oklch(0.85_0.15_78)]" /> Join 250,000+ learners
              </span>
              <h2 className="mt-4 font-display text-3xl font-extrabold leading-tight sm:text-4xl">
                Start learning today.
                <br />
                <span className="bg-gradient-to-r from-white to-[oklch(0.85_0.15_78)] bg-clip-text text-transparent">
                  Your future self will thank you.
                </span>
              </h2>
              <p className="mt-3 max-w-xl text-white/75">
                Sign up free and get instant access to sample lessons from every category.
              </p>
            </div>
            <div className="flex flex-col gap-3 sm:flex-row lg:justify-end">
              <button className="inline-flex items-center justify-center gap-2 rounded-full bg-white px-6 py-3 text-sm font-semibold text-[color:var(--primary)] shadow-elegant transition-all hover:-translate-y-0.5 hover:shadow-glow">
                Create Free Account <ArrowRight className="h-4 w-4" />
              </button>
              <button className="inline-flex items-center justify-center gap-2 rounded-full border border-white/25 bg-white/5 px-6 py-3 text-sm font-semibold text-white backdrop-blur hover:bg-white/10">
                <LayoutGrid className="h-4 w-4" /> Browse Courses
              </button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
}

function SectionHeader({
  eyebrow,
  title,
  subtitle,
  align = "center",
}: {
  eyebrow?: string;
  title: React.ReactNode;
  subtitle?: string;
  align?: "center" | "left";
}) {
  const alignCls = align === "left" ? "text-left" : "mx-auto text-center";
  return (
    <div className={`max-w-2xl ${alignCls}`}>
      {eyebrow && (
        <span className="inline-flex items-center gap-1.5 rounded-full bg-primary/10 px-3 py-1 text-xs font-semibold text-primary">
          <Sparkles className="h-3 w-3" /> {eyebrow}
        </span>
      )}
      <h2
        className={`font-display text-3xl font-extrabold tracking-tight text-foreground sm:text-4xl ${
          eyebrow ? "mt-4" : ""
        }`}
      >
        {title}
      </h2>
      {subtitle && <p className="mt-3 text-sm text-muted-foreground sm:text-base">{subtitle}</p>}
    </div>
  );
}

function Card({ children }: { children: React.ReactNode }) {
  return (
    <div className="rounded-2xl border border-border bg-card p-6 shadow-soft sm:p-8">{children}</div>
  );
}

function Badge({ children, tone = "primary" }: { children: React.ReactNode; tone?: "primary" | "accent" }) {
  const cls =
    tone === "accent"
      ? "bg-[color:var(--secondary)]/20 text-[color:var(--secondary-foreground)]"
      : "bg-primary/10 text-primary";
  return (
    <span className={`inline-flex items-center rounded-full px-3 py-1 text-xs font-semibold ${cls}`}>
      {children}
    </span>
  );
}
