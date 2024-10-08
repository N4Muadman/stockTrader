<?php

namespace App\Http\Controllers;

use App\Models\Faqs;
use App\Models\News;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function introduce(){
        return view('pages.introduce');
    }
    public function investment_philosophy(){
        return view('pages.investment_philosophy');
    }
    public function faqs(Request $request){
        $categories = Faqs::with('category_faqs')->where('show', 1)->get();
        $faqs = Faqs::with('category_faqs')->where('show', 1);
        if($request->category){
            $faqs->where('category_id', $request->category);
        }
        if($request->search){
            $faqs->where('question', 'like', '%' . $request->search . '%')->orwhere('answer', 'like', '%' . $request->search . '%');
        }

        $faqs = $faqs->OrderBy('created_at', 'desc')->get();
        return view('pages.faqs', compact('faqs', 'categories'));
    }
    public function detect_waves(){
        $wave_statistics = [
            [
                'category' => 'Chờ mua',
                'share' => 'ADS',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAS',
                'price' => '6.47',
                'reliability' => '',
                'beta' => '0.00',
                'volume' => '1,987,100',
                'incre-decre' => '0.32',
                'percent-incre-decre' => '5.20',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAT',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAV',
                'price' => '3.70',
                'reliability' => '100',
                'beta' => '1.70',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'ABB',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ]
        ];
        return view('pages.detect_waves', compact('wave_statistics'));
    }
    public function category_detect_waves(){
        $wave_statistics = [
            [
                'category' => 'Chờ mua',
                'share' => 'ADS',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAS',
                'price' => '6.47',
                'reliability' => '',
                'beta' => '0.00',
                'volume' => '1,987,100',
                'incre-decre' => '0.32',
                'percent-incre-decre' => '5.20',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAT',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAV',
                'price' => '3.70',
                'reliability' => '100',
                'beta' => '1.70',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'ABB',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ]
        ];
        return view('pages.category_detect_wave', compact('wave_statistics'));
    }
    public function signal(){
        $wave_statistics = [
            [
                'category' => 'Chờ mua',
                'share' => 'ADS',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAS',
                'price' => '6.47',
                'reliability' => '',
                'beta' => '0.00',
                'volume' => '1,987,100',
                'incre-decre' => '0.32',
                'percent-incre-decre' => '5.20',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAT',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAV',
                'price' => '3.70',
                'reliability' => '100',
                'beta' => '1.70',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'ABB',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ]
        ];
        return view('pages.signal', compact('wave_statistics'));
    }

    public function sector_rotation(){
        $sectorTop5 = [
            [
                'id' => 1,
                'category' => 'Ngân hàng thương mại truyền thống',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 140],
                    ['date' => '2024-09-04', 'value' => 145],
                    ['date' => '2024-09-05', 'value' => 150],
                    ['date' => '2024-09-06', 'value' => 160],
                    ['date' => '2024-09-07', 'value' => 155],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 2,
                'category' => 'Xây dựng',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 130],
                    ['date' => '2024-09-04', 'value' => 135],
                    ['date' => '2024-09-05', 'value' => 140],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 140],
                    ['date' => '2024-09-08', 'value' => 147],
                    ['date' => '2024-09-09', 'value' => 143],
                    ['date' => '2024-10-02', 'value' => 138],
                    ['date' => '2024-10-03', 'value' => 133],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 3,
                'category' => 'Bất động sản dân cư',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 135],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 145],
                    ['date' => '2024-09-06', 'value' => 155],
                    ['date' => '2024-09-07', 'value' => 160],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 4,
                'category' => 'Môi giới chứng khoán',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 150],
                    ['date' => '2024-09-02', 'value' => 145],
                    ['date' => '2024-09-03', 'value' => 143],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 130],
                    ['date' => '2024-09-06', 'value' => 128],
                    ['date' => '2024-09-07', 'value' => 130],
                    ['date' => '2024-09-08', 'value' => 135],
                    ['date' => '2024-09-09', 'value' => 130],
                    ['date' => '2024-10-02', 'value' => 128],
                    ['date' => '2024-10-03', 'value' => 135],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 5,
                'category' => 'Sản xuất, chế biến thép',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 152],
                    ['date' => '2024-09-03', 'value' => 142],
                    ['date' => '2024-09-04', 'value' => 148],
                    ['date' => '2024-09-05', 'value' => 152],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 153],
                    ['date' => '2024-09-08', 'value' => 158],
                    ['date' => '2024-09-09', 'value' => 149],
                    ['date' => '2024-10-02', 'value' => 146],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
        ];
        $sectorOther = [
            [
                'id' => 1,
                'category' => 'Ngân hàng thương mại truyền thống',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 140],
                    ['date' => '2024-09-04', 'value' => 145],
                    ['date' => '2024-09-05', 'value' => 150],
                    ['date' => '2024-09-06', 'value' => 160],
                    ['date' => '2024-09-07', 'value' => 155],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 2,
                'category' => 'Xây dựng',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 130],
                    ['date' => '2024-09-04', 'value' => 135],
                    ['date' => '2024-09-05', 'value' => 140],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 140],
                    ['date' => '2024-09-08', 'value' => 147],
                    ['date' => '2024-09-09', 'value' => 143],
                    ['date' => '2024-10-02', 'value' => 138],
                    ['date' => '2024-10-03', 'value' => 133],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 3,
                'category' => 'Bất động sản dân cư',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 135],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 145],
                    ['date' => '2024-09-06', 'value' => 155],
                    ['date' => '2024-09-07', 'value' => 160],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 4,
                'category' => 'Môi giới chứng khoán',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 150],
                    ['date' => '2024-09-02', 'value' => 145],
                    ['date' => '2024-09-03', 'value' => 143],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 130],
                    ['date' => '2024-09-06', 'value' => 128],
                    ['date' => '2024-09-07', 'value' => 130],
                    ['date' => '2024-09-08', 'value' => 135],
                    ['date' => '2024-09-09', 'value' => 130],
                    ['date' => '2024-10-02', 'value' => 128],
                    ['date' => '2024-10-03', 'value' => 135],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 5,
                'category' => 'Sản xuất, chế biến thép',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 152],
                    ['date' => '2024-09-03', 'value' => 142],
                    ['date' => '2024-09-04', 'value' => 148],
                    ['date' => '2024-09-05', 'value' => 152],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 153],
                    ['date' => '2024-09-08', 'value' => 158],
                    ['date' => '2024-09-09', 'value' => 149],
                    ['date' => '2024-10-02', 'value' => 146],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
        ];
        return view('pages.sector_rotation', compact('sectorTop5', 'sectorOther'));
    }

    public function sector_rotation_detail($id){
        $sectorOther = [
            [
                'id' => 1,
                'category' => 'Ngân hàng thương mại truyền thống',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 140],
                    ['date' => '2024-09-04', 'value' => 145],
                    ['date' => '2024-09-05', 'value' => 150],
                    ['date' => '2024-09-06', 'value' => 160],
                    ['date' => '2024-09-07', 'value' => 155],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 2,
                'category' => 'Xây dựng',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 130],
                    ['date' => '2024-09-04', 'value' => 135],
                    ['date' => '2024-09-05', 'value' => 140],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 140],
                    ['date' => '2024-09-08', 'value' => 147],
                    ['date' => '2024-09-09', 'value' => 143],
                    ['date' => '2024-10-02', 'value' => 138],
                    ['date' => '2024-10-03', 'value' => 133],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 3,
                'category' => 'Bất động sản dân cư',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 135],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 145],
                    ['date' => '2024-09-06', 'value' => 155],
                    ['date' => '2024-09-07', 'value' => 160],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 4,
                'category' => 'Môi giới chứng khoán',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 150],
                    ['date' => '2024-09-02', 'value' => 145],
                    ['date' => '2024-09-03', 'value' => 143],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 130],
                    ['date' => '2024-09-06', 'value' => 128],
                    ['date' => '2024-09-07', 'value' => 130],
                    ['date' => '2024-09-08', 'value' => 135],
                    ['date' => '2024-09-09', 'value' => 130],
                    ['date' => '2024-10-02', 'value' => 128],
                    ['date' => '2024-10-03', 'value' => 135],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 5,
                'category' => 'Sản xuất, chế biến thép',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 152],
                    ['date' => '2024-09-03', 'value' => 142],
                    ['date' => '2024-09-04', 'value' => 148],
                    ['date' => '2024-09-05', 'value' => 152],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 153],
                    ['date' => '2024-09-08', 'value' => 158],
                    ['date' => '2024-09-09', 'value' => 149],
                    ['date' => '2024-10-02', 'value' => 146],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
        ];

        $sector = [];
        foreach ($sectorOther as $it){
            if ($it['id'] == $id){
                $sector = $it;
                break;
            }
        }
        $wave_statistics = [
            [
                'category' => 'Chờ mua',
                'share' => 'ADS',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAS',
                'price' => '6.47',
                'reliability' => '',
                'beta' => '0.00',
                'volume' => '1,987,100',
                'incre-decre' => '0.32',
                'percent-incre-decre' => '5.20',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAT',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'AAV',
                'price' => '3.70',
                'reliability' => '100',
                'beta' => '1.70',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ],
            [
                'category' => 'Chờ mua',
                'share' => 'ABB',
                'price' => '11.72',
                'reliability' => '100',
                'beta' => '1.65',
                'volume' => '104,600',
                'incre-decre' => '0.45',
                'percent-incre-decre' => '3.99',
            ]
        ];

        $sectorOutstanding = [
            [
                'id' => 1,
                'category' => 'Ngân hàng thương mại truyền thống',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 140],
                    ['date' => '2024-09-04', 'value' => 145],
                    ['date' => '2024-09-05', 'value' => 150],
                    ['date' => '2024-09-06', 'value' => 160],
                    ['date' => '2024-09-07', 'value' => 155],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 2,
                'category' => 'Xây dựng',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 100],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 130],
                    ['date' => '2024-09-04', 'value' => 135],
                    ['date' => '2024-09-05', 'value' => 140],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 140],
                    ['date' => '2024-09-08', 'value' => 147],
                    ['date' => '2024-09-09', 'value' => 143],
                    ['date' => '2024-10-02', 'value' => 138],
                    ['date' => '2024-10-03', 'value' => 133],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 3,
                'category' => 'Bất động sản dân cư',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 150],
                    ['date' => '2024-09-03', 'value' => 135],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 145],
                    ['date' => '2024-09-06', 'value' => 155],
                    ['date' => '2024-09-07', 'value' => 160],
                    ['date' => '2024-09-08', 'value' => 153],
                    ['date' => '2024-09-09', 'value' => 147],
                    ['date' => '2024-10-02', 'value' => 140],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
            [
                'id' => 4,
                'category' => 'Môi giới chứng khoán',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 150],
                    ['date' => '2024-09-02', 'value' => 145],
                    ['date' => '2024-09-03', 'value' => 143],
                    ['date' => '2024-09-04', 'value' => 140],
                    ['date' => '2024-09-05', 'value' => 130],
                    ['date' => '2024-09-06', 'value' => 128],
                    ['date' => '2024-09-07', 'value' => 130],
                    ['date' => '2024-09-08', 'value' => 135],
                    ['date' => '2024-09-09', 'value' => 130],
                    ['date' => '2024-10-02', 'value' => 128],
                    ['date' => '2024-10-03', 'value' => 135],
                    ['date' => '2024-10-04', 'value' => 140]
                ]
            ],
            [
                'id' => 5,
                'category' => 'Sản xuất, chế biến thép',
                'data' => [
                    ['date' => '2024-09-01', 'value' => 140],
                    ['date' => '2024-09-02', 'value' => 152],
                    ['date' => '2024-09-03', 'value' => 142],
                    ['date' => '2024-09-04', 'value' => 148],
                    ['date' => '2024-09-05', 'value' => 152],
                    ['date' => '2024-09-06', 'value' => 145],
                    ['date' => '2024-09-07', 'value' => 153],
                    ['date' => '2024-09-08', 'value' => 158],
                    ['date' => '2024-09-09', 'value' => 149],
                    ['date' => '2024-10-02', 'value' => 146],
                    ['date' => '2024-10-03', 'value' => 150],
                    ['date' => '2024-10-04', 'value' => 160]
                ]
            ],
        ];
        return view('pages.sector_rotation_detail', compact('sector', 'wave_statistics', 'sectorOutstanding'));
    }

    public function news(Request $request){
        $news = News::with('user')->where('show', 1);

        if($request->search){
            $news->whereRaw('MATCH(title, content) AGAINST(? IN BOOLEAN MODE)', ['"' . addslashes($request->search) . '"']);
        }
        $news = $news->OrderBy('created_at', 'desc')->paginate(9);

        return view('pages.news', compact('news'));
    }

    public function newsDetail($slug){
        $newsDetail = News::with('user')->where('slug', $slug)->where('show', 1)->first();
        if(!$newsDetail){
            return alert(404);
        }
        $newsDetail->update([
            'view' => $newsDetail->view + 1,
        ]);
        $news = News::where('show', 1)->where('id', '!=' ,$newsDetail->id);
        return view('pages.news-detail', compact('newsDetail', 'news'));
    }
}
