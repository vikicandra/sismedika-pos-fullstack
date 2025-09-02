// import { dashboard, login, register } from '@/routes';
// import { type SharedData } from '@/types';
// import { Head, Link, usePage } from '@inertiajs/react';

import BaseLayout from "@/layouts/base-layout";

export default function Welcome() {
    // const { auth } = usePage<SharedData>().props;
    return (
        <>
            <BaseLayout>
                <h1>Halo</h1>
            </BaseLayout>
        </>
    )


}

