 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>The Reality: Children Suffering in War Zones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff8f0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      line-height: 1.6;
    }
    .hero {
      background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
      height: 350px;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
      margin-bottom: 40px;
    }
    .hero h1 {
      font-size: 3rem;
      text-align: center;
    }
    .content {
      max-width: 900px;
      margin: auto;
      padding: 0 1rem 3rem;
    }
    h2 {
      color: #b22222;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }
    .stat {
      font-weight: bold;
      color: #a03030;
      margin-bottom: 1rem;
      font-size: 1.2rem;
    }
    blockquote {
      font-style: italic;
      background: #ffe6e6;
      border-left: 5px solid #b22222;
      margin: 2rem 0;
      padding: 1rem 1.5rem;
      color: #800000;
    }
    .footer {
      text-align: center;
      font-size: 0.9rem;
      color: #555;
      margin-top: 4rem;
      padding-bottom: 2rem;
    }
  </style>
</head>
<body>

  <!-- 🌍 Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="index.php">HopeForChildren</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="children_in_war.php">Children in War</a></li>
          <li class="nav-item"><a class="nav-link" href="donate.php">Donate</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Children Suffering in War Zones</h1>
  </div>

  <div class="content">
    <p>
      Millions of children around the world live in constant fear, hunger, and pain because of war. These innocent souls, who should be learning, playing, and growing in safety, face unimaginable hardship every day.
    </p>

    <h2>The Reality They Face</h2>
    <p class="stat">🚸 Over 400 million children worldwide live in areas affected by armed conflict.</p>
    <p class="stat">💔 Thousands of children lose their lives or are permanently injured by bombs, gunfire, and violence each year.</p>
    <p class="stat">📚 Nearly 50% of children in war zones are denied access to education due to destroyed schools and unsafe environments.</p>
    <p class="stat">🥀 More than 2 million children suffer from severe malnutrition, leading to lifelong health problems or death.</p>
    <p class="stat">🏥 Essential healthcare is often unavailable; many hospitals and clinics have been destroyed or are out of supplies.</p>

    <h2>Voices from the Field</h2>
    <blockquote>
      "My home was bombed while I was sleeping. I lost my parents. Now I live in a tent with my brothers. I miss going to school and having friends." – Amina, 9 years old, Yemen
    </blockquote>
    <blockquote>
      "I walk miles every day to find clean water. Sometimes, there is none. I’m scared to sleep because of the noises of war." – Dmytro, 11 years old, Ukraine
    </blockquote>

    <h2>Why It Matters</h2>
    <p>
      Childhood is a precious time meant for growth and joy. War steals this from millions of children, replacing it with trauma, pain, and loss. If these children do not receive urgent help, the scars of war will last lifetimes, affecting not just individuals but entire societies.
    </p>

    <h2>How You Can Help</h2>
    <p>
      Even if you cannot donate directly, raising awareness, advocating for peace, and supporting organizations that provide aid can save lives. Every voice matters.
    </p>

    <p>
      For reliable information and ways to support, visit trusted organizations like <a href="https://www.unicef.org" target="_blank" rel="noopener">UNICEF</a> and <a href="https://www.savethechildren.org" target="_blank" rel="noopener">Save the Children</a>.
    </p>
  </div>

  <div class="footer">
    &copy; 2025 Hope for Children in War Zones | Compassion is our strength.
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> <!-- 
import Link from "next/link"
import { Button } from "@/components/ui/button"
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import { Home, Utensils, GraduationCap, Brain, Stethoscope } from "lucide-react"

export default function ChildrenInWarPage() {
  const challenges = [
    {
      icon: Home,
      title: "Displacement",
      description: "Forced to flee their homes and live in refugee camps with minimal shelter.",
    },
    {
      icon: Utensils,
      title: "Malnutrition",
      description: "Lack of consistent access to nutritious food and clean water.",
    },
    {
      icon: GraduationCap,
      title: "Interrupted Education",
      description: "Schools destroyed or closed, stealing their chance at a better future.",
    },
    {
      icon: Stethoscope,
      title: "Medical Neglect",
      description: "Injuries, diseases, and trauma often untreated due to destroyed healthcare systems.",
    },
    {
      icon: Brain,
      title: "Psychological Trauma",
      description: "Exposure to violence leaves deep emotional scars.",
    },
  ]

  return (
    <div className="min-h-screen">
      {/* Hero Section */}
      <section className="bg-gradient-to-br from-red-50 to-orange-100 py-20 px-4">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center space-y-6">
            <h1 className="text-4xl md:text-6xl font-bold text-gray-800 leading-tight">
              The Harsh Reality for Children in War
            </h1>
            <p className="text-lg md:text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
              War robs children of their childhood and safety. Across countries like Syria, Yemen, Gaza, and
              Afghanistan, millions of children are caught in the crossfire.
            </p>
          </div>
        </div>
      </section>

      {/* Challenges Section */}
      <section className="py-16 px-4 bg-white">
        <div className="container mx-auto max-w-6xl">
          <h2 className="text-3xl font-bold text-center text-gray-800 mb-12">The Challenges They Face</h2>
          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            {challenges.map((challenge, index) => (
              <Card key={index} className="border-red-200 hover:shadow-lg transition-shadow">
                <CardHeader>
                  <challenge.icon className="w-12 h-12 text-red-600 mb-4" />
                  <CardTitle className="text-xl text-gray-800">{challenge.title}</CardTitle>
                </CardHeader>
                <CardContent>
                  <p className="text-gray-600">{challenge.description}</p>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      {/* Statistics Section */}
      <section className="py-16 px-4 bg-gray-50">
        <div className="container mx-auto max-w-6xl">
          <div className="text-center space-y-8">
            <h2 className="text-3xl font-bold text-gray-800">The Numbers Tell the Story</h2>
            <div className="grid md:grid-cols-3 gap-8">
              <div className="text-center">
                <div className="text-4xl font-bold text-red-600 mb-2">400M+</div>
                <p className="text-gray-700">Children living in conflict zones worldwide</p>
              </div>
              <div className="text-center">
                <div className="text-4xl font-bold text-red-600 mb-2">75M</div>
                <p className="text-gray-700">Children out of school due to conflict</p>
              </div>
              <div className="text-center">
                <div className="text-4xl font-bold text-red-600 mb-2">28M</div>
                <p className="text-gray-700">Children displaced by war and violence</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Call to Action */}
      <section className="py-16 px-4 bg-red-600">
        <div className="container mx-auto max-w-4xl text-center">
          <h2 className="text-3xl font-bold text-white mb-6">We Must Act Urgently</h2>
          <p className="text-xl text-red-100 mb-8">
            Every child deserves safety, education, and hope. Together, we can provide life-saving aid and protect their
            rights.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button asChild size="lg" className="bg-white text-red-600 hover:bg-gray-100">
              <Link href="/what-you-can-do">See How You Can Help</Link>
            </Button>
            <Button
              asChild
              variant="outline"
              size="lg"
              className="border-white text-white hover:bg-white hover:text-red-600"
            >
              <Link href="/donate">Donate Now</Link>
            </Button>
          </div>
        </div>
      </section>
    </div>
  )
  }-->
