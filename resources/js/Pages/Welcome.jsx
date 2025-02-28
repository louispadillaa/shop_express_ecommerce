import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, Link } from '@inertiajs/react';

export default function Welcome({ auth, laravelVersion, phpVersion }) {
    const handleImageError = () => {
        document
            .getElementById('screenshot-container')
            ?.classList.add('!hidden');
        document.getElementById('docs-card')?.classList.add('!row-span-1');
        document
            .getElementById('docs-card-content')
            ?.classList.add('!flex-row');
        document.getElementById('background')?.classList.add('!hidden');
    };

    return (
        <AuthenticatedLayout> 
            <Head title="Welcome" />
            <div className="hero bg-gray-200 h-[300px]">
                <div className="hero-content text-center">
                    <div className="max-w-md">
                        <h1 className="text-5xl font-bold">SHOW EXPRESS</h1>
                            <p className="py-6">
                                Encuentra todos los articulos de ropa que desees con excelentes precios, todo en un solo lugar.
                            </p>
                                <button className="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
            </AuthenticatedLayout>
        
    );
}
